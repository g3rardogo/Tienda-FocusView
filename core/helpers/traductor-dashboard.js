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
        'titulo-inicio': 'RESUMEN',
        'titulo-cliente': 'Clientes',
        'info-cliente': 'Más información',
        'titulo-productos': 'Productos',
        'info-productos': 'Más información',
        'titulo-categorias': 'Categorías',
        'info-categorias': 'Más información',
        'titulo-pedidos': 'Pedidos',
        'info-pedidos': 'Más información',
        'titulo-reportes': 'Reportes',
        'titulo-reporte1': 'Productos por categoría',
        'info-reporte1': 'Más información',
        'titulo-reporte2': 'Ordenes por usuario',
        'info-reporte2': 'Más información',
        'titulo-reporte3': 'Ganancias',
        'info-reporte3': 'Más información',
        'titulo-reporte4': 'Productos más vendidos',
        'info-reporte4': 'Más información',
        'titulo-reporte5': 'Bitacora',
        'info-reporte5': 'Más información',
        'menu1': 'Pedidos',
        'menu2': 'Productos',
        'menu3': 'Categorias',
        'menu4': 'Clientes',
        'menu5': 'Usuarios',
        'menu6': 'Gestionar usuarios'

    },
    'EN':{
        'titulo-inicio': 'SUMMARY',
        'titulo-cliente': 'Customers',
        'info-cliente': 'More information',
        'titulo-productos': 'Products',
        'info-productos': 'More information',
        'titulo-categorias': 'Categories',
        'info-categorias': 'More information',
        'titulo-pedidos': 'Orders',
        'info-pedidos': 'More information',
        'titulo-reportes': 'Reports',
        'titulo-reporte1': 'Products by category',
        'info-reporte1': 'More information',
        'titulo-reporte2': 'Orders by user',
        'info-reporte2': 'More information',
        'titulo-reporte3': 'Earnings',
        'info-reporte3': 'More information',
        'titulo-reporte4': 'most selled products',
        'info-reporte4': 'More information',
        'titulo-reporte5': 'Binnacle',
        'info-reporte5': 'More information',
        'menu1': 'Orders',
        'menu2': 'Products',
        'menu3': 'Categories',
        'menu4': 'Customers',
        'menu5': 'Users',
        'menu6': 'Manage users'

    }
}