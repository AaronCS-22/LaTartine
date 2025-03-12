<x-layouts.layout title="Página principal">
    @guest
        <div class="pagina-principal-imagen">
            <div class="pagina-principal-imagen-texto">La Tartine</div>
            <div class="scroll-icon">&#94;</div>
        </div>
        <div class="contenido">
            <section class="quienes-somos">
                <h2>¿Quiénes somos?</h2>
                <p class="text-white">Somos un grupo de personas obsesionadas con el dulce. Desde que descubrimos que el azúcar es lo que realmente mueve el mundo, decidimos dedicarnos a hacer tartas tan deliciosas que harán que se te caigan las lágrimas... de felicidad, por supuesto.</p>
            </section>

            <section class="nuestros-objetivos">
                <h2>Nuestros objetivos</h2>
                <ul class="text-white">
                    <li>Proporcionar tartas tan ricas que no podrás dejar de comer.</li>
                    <li>Hacer que cada cumpleaños sea épico (o cualquier excusa para comer tarta).</li>
                    <li>Convertirnos en la razón por la que todos tus amigos te aman.</li>
                    <li>Hacer tartas personalizadas para tus mascotas (¡sí, lo has leído bien!)</li>
                </ul>
            </section>

            <section class="la-tarta-del-mes">
                <h2>La Tarta del Mes</h2>
                <p class="text-white">Este mes tenemos la <strong>Tarta Explosiva de Chocolate y Frambuesa</strong>. ¡Una combinación explosiva que hará que tu paladar haga fiesta!</p>
                <img src="https://lacocinadefrabisa.lavozdegalicia.es/wp-content/uploads/2013/05/tarta-mascarpone-frambuesas-3.jpg" alt="Tarta Explosiva de Chocolate y Frambuesa">
            </section>

            <section class="contacta">
                <h2>Contacta con nosotros</h2>
                <p class="text-white">Si tienes una celebración (o simplemente tienes hambre) no dudes en ponerte en contacto con nosotros. ¡Estamos aquí para hacer tus sueños de tarta realidad!</p>
                <p class="text-white"><strong>Email:</strong> contacto@latartine.com</p>
                <p class="text-white"><strong>Teléfono:</strong> 123-456-789</p>
            </section>

            <section class="contacta-mascotas">
                <h2>¿Tartas para tu mascota?</h2>
                <p class="text-white">¡Por supuesto! Nos especializamos en hacer tartas para tu gato, perro, loro, e incluso para tus peces si son muy sofisticados. ¡Porque todos merecen celebrar con un pedazo de tarta!</p>
            </section>
        </div>
    @endguest
    @auth
            <div class="pagina-principal-imagen">
                <div class="pagina-principal-imagen-texto">Bienvenid@, {{auth()->user()->name}}</div>
                <div class="scroll-icon">&#94;</div>
            </div>
            <div class="contenido">
                <section class="usuario-registrado">
                    <h2>¿Qué tal?</h2>
                    <p class="text-white">Nos alegra que estés aquí. Eres parte de nuestra comunidad y queremos ofrecerte las tartas más deliciosas del mundo. ¿Listo para hacer más tartas?</p>
                </section>
            </div>
    @endauth
</x-layouts.layout>
