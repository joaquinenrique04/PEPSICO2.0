document.addEventListener('DOMContentLoaded', () => {
    const carrito = document.getElementById('carrito');
    const carritoItems = document.getElementById('carrito-items');
    const carritoTotalPrecio = document.getElementById('carrito-total-precio');
    const buttons = document.querySelectorAll('.producto-button');
    const productosContainer = document.querySelector('.productos-container'); // Contenedor de los productos

    let total = 0;

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const productoDetails = button.parentElement;
            const nombre = productoDetails.querySelector('.producto-title').innerText;
            const precio = parseFloat(productoDetails.querySelector('.producto-price').innerText.replace('$', ''));
            const imagenSrc = productoDetails.parentElement.querySelector('img').src;

            if (nombre && !isNaN(precio)) {
                // Verificar si el producto ya está en el carrito
                let existingItem = carritoItems.querySelector(`[data-nombre="${nombre}"]`);

                if (existingItem) {
                    // Si el producto ya está en el carrito, actualizar la cantidad y el precio
                    const cantidad = parseInt(existingItem.dataset.cantidad) + 1;
                    const nuevoPrecio = precio * cantidad;
                    existingItem.dataset.cantidad = cantidad;
                    existingItem.querySelector('.cantidad span').innerText = `${cantidad} UND`;
                    existingItem.querySelector('.producto-precio span').innerText = `$${nuevoPrecio.toFixed(2)}`;
                } else {
                    // Si el producto no está en el carrito, agregarlo
                    existingItem = document.createElement('div');
                    existingItem.className = 'carrito-item';
                    existingItem.dataset.nombre = nombre;
                    existingItem.dataset.precio = precio;
                    existingItem.dataset.cantidad = 1;

                    existingItem.innerHTML = `
                        <img src="${imagenSrc}" width="50" height="50">
                        <div class="producto-detalles">
                            <h3 class="producto-title">${nombre} <button class="boton-eliminar">🗑️</button></h3>
                            <div class="producto-precio">
                                $<span>${precio.toFixed(2)}</span>
                                <div class="cantidad">
                                    <button class="boton-menos boton-cantidad">-</button>
                                    <span>1 UND</span>
                                    <button class="boton-mas boton-cantidad">+</button>
                                </div>
                            </div>
                        </div>
                    `;
                    carritoItems.appendChild(existingItem);

                    // Agregar eventos para los botones de cantidad
                    existingItem.querySelector('.boton-menos').addEventListener('click', () => {
                        actualizarCantidad(existingItem, -1);
                    });
                    existingItem.querySelector('.boton-mas').addEventListener('click', () => {
                        actualizarCantidad(existingItem, 1);
                    });
                    // Agregar evento para el botón de eliminación
                    existingItem.querySelector('.boton-eliminar').addEventListener('click', () => {
                        eliminarProducto(existingItem);
                    });
                }

                // Actualizar el total
                total += precio;
                carritoTotalPrecio.innerText = `$${total.toFixed(2)}`;

                // Mostrar el carrito si está oculto y desplazar los productos
                carrito.classList.add('carrito-mostrar');
                productosContainer.classList.add('productos-desplazado');
            } else {
                console.error('Error al obtener los datos del producto');
            }
        });
    });

    function actualizarCantidad(item, cambio) {
        const nombre = item.dataset.nombre;
        const precio = parseFloat(item.dataset.precio);
        let cantidad = parseInt(item.dataset.cantidad) + cambio;
        if (cantidad < 1) {
            eliminarProducto(item);
        } else {
            const nuevoPrecio = precio * cantidad;
            item.dataset.cantidad = cantidad;
            item.querySelector('.cantidad span').innerText = `${cantidad} UND`;
            item.querySelector('.producto-precio span').innerText = `$${nuevoPrecio.toFixed(2)}`;

            // Actualizar el total
            total += precio * cambio;
            carritoTotalPrecio.innerText = `$${total.toFixed(2)}`;
        }
    }

    function eliminarProducto(item) {
        const nombre = item.dataset.nombre;
        const precio = parseFloat(item.dataset.precio);
        const cantidad = parseInt(item.dataset.cantidad);
        total -= precio * cantidad;
        carritoTotalPrecio.innerText = `$${total.toFixed(2)}`;
        item.remove();

        // Ocultar el carrito si no hay productos
        if (carritoItems.children.length === 0) {
            carrito.classList.remove('carrito-mostrar');
            productosContainer.classList.remove('productos-desplazado');
        }
    }
});
