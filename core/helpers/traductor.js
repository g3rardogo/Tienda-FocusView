const lang = localStorage.getItem('language');

$(document).ready(function(){
    if (lang != null) {
        showTraslate(lang);
    } else {
        showTraslate('ES');
    }
})

function showTraslate(id) { 
    $('.idioma').text(id);
    $('.lang').each(function(index, element) {
        $(this).text(arrLang[id][$(this).attr('key')]);
    })
}

function showEs() {
    showTraslate('ES');
    localStorage.setItem('language', 'ES');
}

function showEn() {
    showTraslate('EN');
    localStorage.setItem('language', 'EN');
}

function showEs2() {
    showTraslate('ES');
    localStorage.setItem('language', 'ES');
}

function ShowEs2() {
    showTraslate('ES');
    localStorage.setItem('language', 'ES');
    destroyTable('tabla-libros');
    initTable2('tabla-libros');
}


function ShowEn2() {
    showTraslate('EN');
    localStorage.setItem('language', 'EN');
    destroyTable('tabla-libros');
    initTable2('tabla-libros');
}

var arrLang = {
    'ES': {
        'titulo-categoria': 'Categoría',
        'Organizar-categoria': 'Encuentra lo que necesitas organizado por categorías',
        'Quienes-somos': 'Quienes Somos',
        'Equipo-inicio': 'Nuestro equipo de FocusView es completamente increíble, hace que todo                     lo que compres sea de una manera única',
        'Frase-josue': 'La mayoría de personas piensan que no pueden lograr las cosas por si                        mismos, yo les digo el que no arriesga no gana',
        'Frase-gerardo': 'Siempre creí que el éxito se alcanza logrando todo lo que te propongas',
        'Frase-carlos': 'Las oportunidades no pasan, las creas, He fallado una y otra vez y es                     por ello que he tenido éxito',
        'footer-desc': 'Si realmente eres amante de los deporte entonces compra algo que te dejara recuerdos en todo momento y que siempre seras un gran deportista...',
        'footer-productos': 'Productos',
        'footer-links': 'Links mas usados',
        'footer-contactenos': 'Contáctenos:',
        'nav-inicio': 'Inicio',
        'nav-sesion': 'Iniciar Sesión',
        'nav-sobre': 'Sobre Nosotros',
        'nav-perfil': 'Perfil',
        'index-inicio': 'Iniciar sesión',
        'index-sesion': 'Iniciar sesión',
        'index-clave': '¿Olvidaste tu clave?',
        'index-registrar': '¿Eres nuevo?, Regístrate aquí',
        'register-cuenta': 'CREAR CUENTA NUEVA',
        'register-cancelar': 'Cancelar',
        'register-register': 'Registrar',
        'help': 'Ayuda',
        'help-seccion': 'En esta sección vemos las preguntas mas frecuentes que se presentan cuando entras a la pagina',
        'help-pregunta': '¿Como hago para comprar una cámara?',
        'help-pregunta1': '¿Mis productos me llegan a casa?',
        'help-pregunta2': '¿Que productos cubren la garantía?',
        'help-pregunta3': '¿Como hago para comprar una cámara?',
        'help-parrafo': 'Respuesta: Todos nuestros productos tienen garantia de un plazo de un mes, si el producto te llega defectuoso, la empresa se hace cargo de hacerte de inmediato un cambio de producto. De acuerdo con el nuestras normas y politicas de la empresa tiene que pasa un procedimiento de revision para ver si el producto realmente esta malo. Informar sobre infracciones de nuestras políticas Investigamos las infracciones de nuestras políticas e insistimos en que se den las explicaciones pertinentes. Si identificas una infracción, indícanoslo inmediatamente. Ejemplos de infracción de nuestras políticas: Un comprador no paga un artículo',
        'help-parrafo1': 'Se realiza una oferta para completar la transacción fuera de eBay. Un usuario envía correo no solicitado (spam) a otro. Infracciones de los derechos de propiedad intelectual y marcas registradas. Un comprador amenaza con darte una valoración negativa si no cumples determinadas peticiones.',
        'help-parrafo2': ' Respuesta: Nuestra pagina esta hecha para que de una manera simple y sencilla puedas adquirir nuestros productos eficazmente.',
        'Agregar_libros': 'Agregar libros',
        'Agregar_editorial': 'Agregar editorial',
        'Agregar_usuarios': 'Agregar usuarios',
        'Agregar_categorias':'Agregar categorías',
        'Crear_usuario':'Crear usuario',
        'Modificar_libros': 'Modificar libros',
        'Modificar_editorial': 'Modificar editorial',
        'Modificar_categoria': 'Modificar categoria',
        'carrito': 'Carrito',
        'Reporte_ventas_categoria': 'Reportes de ventas por categoría',
        'Reporte_ventas_editorial': 'Reporte de ventas por editorial',
        'Reporte_clientes': 'Reporte clientes',
        'Reporte_Bitacora': 'Reporte bitácora',
        'Nombre_libro': 'Nombre del libro',
        'Descripcion': 'Descripción',
        'Autor': 'Autor',
        'Cambiar_contraseña': 'Cambiar contraseña',
        'Contrasenia': 'Contraseña',
        'olvido': '¿Olvidó su contraseña?',
        'Confirmar_contraseña': 'Confirmar contraseña',
        'Contraseña_actual': 'Contraseña actual',
        'Repita_contraseña_actual': 'Repita la contraseña actual',
        'Contraseña_nueva': 'Contraseña nueva',
        'Repita_contraseña_nueva': 'Repita nueva contraseña',
        'Guardar_cambios': 'Guardar cambios',
        'bienvenidos': 'Bienvenidos',
        'Contraseña': 'Contraseña',
        'Contactanos_publica': 'Contactanos',
        'Quienes_somos': '¿Quienes somos?',
        'mision': 'Misión',
        'Vision':'Visión',
        'lograr_Ser': 'Lograr ser la mejor librería a nivel nacional con ayuda de la tecnología.',
        'Somos_empresa': 'Somos una empresa que busca fomentar la lectura en los jóvenes, apoyados de la ayuda de la tecnología, para obtenerlos de manera más efectiva virtualmente.',
        'Libros_Disponibles': 'Libros disponibles',
        'Iniciar_Sesion': 'Iniciar Sesion',
        'Cerrar_Sesion': 'Cerrar sesion',    
        'Nuestros_telefonos': 'Nuestros telefonos son: 2121-2828 y 2277-7777',
        'Nuestro_Correo': 'Nuestro correo: libreriafrancar@gmail.com.',
        'Libros_Recien': 'LIBROS RECIEN INGRESADOS', 
        'Sintesis': 'Sintesis',
        'Las_tediosas':'Las tediosas vacaciones de verano en casa de sus tíos todavía no han acabado y Harry se encuentra más inquieto que nunca. Apenas ha tenido noticias de Ron y Hermione, y presiente que algo extraño está sucediendo en Hogwarts. En efecto, cuando por fin comienza otro curso en el famoso colegio de magia y hechicería, sus temores se vuelven realidad.',
        'Hogwards':'Con dieciséis años cumplidos, Harry Potter inicia el sexto curso en Hogwarts en medio de terribles acontecimientos que asolan Inglaterra. Elegido capitán del equipo de Quidditch, los entrenamientos, los exámenes y las chicas ocupan todo su tiempo, pero la tranquilidad dura poco.'
    },
    'EN':{
        'titulo-categoria': 'Category',
        'Organizar-categoria': 'Find what you need organized by categories',
        'Quienes-somos': 'About us',
        'Equipo-inicio': 'Our FocusView team is completely amazing, it makes everything you buy                     uniquely',
        'Frase-josue': 'Most people think that they cannot achieve things on their own, I tell                      them that they dont risk, they dont win',
        'Frase-gerardo': 'I always believed that success is achieved by achieving everything you set your mind to',
        'Frase-carlos': 'Opportunities do not pass, you create them, I have failed again and again and that is why I have succeeded ',
        'footer-desc': 'If you really are a sports lover then buy something that will leave you at all times and that you will always be a great athlete ...',
        'footer-productos': 'Products',
        'footer-links': 'Most used links',
        'footer-contactenos': 'Contact Us',
        'nav-inicio': 'Home',
        'nav-sesion': 'Login',
        'nav-sobre': 'About Us',
        'nav-perfil': 'Profile',
        'index-inicio': 'Login ',
        'index-sesion': 'Login ',
        'index-clave': 'Did you forget your password?',
        'index-registrar': 'Are you new ?, Register here',
        'register-cuenta': 'Create new account',
        'register-cancelar': 'Cancel',
        'register-register': 'Register',
        'help': 'Help',
        'help-seccion': 'In this section we see the most frequent questions that arise when you enter the page.',
        'help-pregunta': 'How do I buy a camera?',
        'help-pregunta1': 'Do my products come home to me?',
        'help-pregunta2': 'What products cover the warranty?',
        'help-pregunta3': 'How do I buy a camera?',
        'help-parrafo': 'Answer: All our products are guaranteed for a period of one month, if the product arrives defective, the company is responsible for immediately making a change of product. According to our company rules and policies, it has to pass a review procedure to see if the product is really bad. Report violations of our policies We investigate violations of our policies and insist that relevant explanations be given. If you identify a violation, tell us immediately. Examples of violation of our policies: A buyer does not pay for an item',
        'help-parrafo1': 'An offer is made to complete the transaction outside of eBay. A user sends unsolicited email (spam) to another. Infringements of intellectual property rights and registered trademarks. A buyer threatens to give you a negative rating if you do not meet certain requests',
        'help-parrafo2': 'Answer: Our page is made so that in a simple and simple way you can acquire our','Estado': 'State',
        'carrito': 'Shopping car',
        'Agregar_libros': 'Add books',
        'Agregar_editorial': 'Add editorial',
        'Agregar_categorias':'Add categories',
        'Agregar_usuarios': 'Add users',
        'Modificar_libros': 'Modify books',
        'Modificar_editorial': 'Modify editorial',
        'Modificar_categoria': 'Modify categorie',
        'Reporte_ventas': 'Report of sales',
        'Reporte_ventas_categoria': 'Reports of sales by categories',
        'Reporte_ventas_editorial': 'Reports of sales by editorial',
        'Reporte_clientes': 'Report of clients',
        'Reporte_Bitacora': 'Log report',
        'Nombre_libro': 'Name of book',
        'Descripcion': 'Description',
        'Autor': 'Author',
        'Cambiar_contraseña': 'Change password',
        'Contrasenia': 'password',
        'olvido': 'Forgot your password?',
        'Confirmar_contraseña':'Password confirm',
        'Contraseña_actual': 'Current password',
        'Repita_contraseña_actual': 'Repeat the current password',
        'Contraseña_nueva': 'New Password',
        'Repita_contraseña_nueva': 'Repeat new password',
        'Guardar_cambios': 'Save changes',
        'bienvenidos': 'Welcome',
        'Contraseña': 'Password',
        'Contactanos_publica': 'Contact us',
        'Quienes_somos': 'About us',
        'mision': 'Mission',
        'lograr_Ser': 'Achieve to be the best national bookstore with the help of technology.',
        'Somos_empresa': 'We are a company that seeks to encourage reading among young people, supported by the help of technology, to obtain the most effective way virtually.',
        'Vision':'Vision',
        'Libros_Disponibles': 'available books',
        'Iniciar_Sesion': 'Log in',
        'Cerrar_Sesion': 'Log out', 
        'Nuestros_telefonos': 'Our phones are: 2121-2828 and 2277-7777',   
        'Nuestro_Correo': 'Our mail: libreriafrancar@gmail.com.',
        'Libros_Recien': 'Newly entered books', 
        'Sintesis': 'Synthesis',
        'Las_tediosas': 'The tedious summer vacations at his uncles house are not over yet and Harry is more restless than ever. He has barely heard from Ron and Hermione, and senses that something strange is happening at Hogwarts. Indeed, when another course at the famous school of magic and witchcraft finally begins, his fears become reality.',
        'Hogwards':'With sixteen years of age, Harry Potter begins the sixth year at Hogwarts amid terrible events that plague England. Elected captain of the Quidditch team, training, exams and girls take up all their time, but peace of mind is short-lived.'
    }
}