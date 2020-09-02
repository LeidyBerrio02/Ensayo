var ciudades;
ciudades = {
    Amazonas: ["Leticia", "El encanto", "La Chorrera", "La Pedrera", "Miritiparaná", "Puerto Alegría", "Puerto Arica",
        "Puerto Nariño",
        "Puerto Santader"
    ],
    Antioquia: ["Abejorral", "Abriaqui", "Alejandria", "Amaga", "Amalfi", "Andes", "Angelópolis", "Angostura", "Anori", "Anza", "Apartadó", "Arboletes", "Argelia", "Armenia", "Barbosa", "Bello", "Belmira", "Betania", "Betulia", "Cáceres", "Caicedo", "Caldas", "Campamento", "Cañasgordas", "Caracoli", "Caramanta", "Carepa", "Carmen del Viboral", "Carolina del Principe", "Caucasia", "Chigorodo", "Cisnero", "Cocorna", "Concepcion", "Copacabana", "Dabaiba", "Dabeiba", "Don Matías", "Ebejico", "El bagre", "El carmen de viboral", "Entrerrios", "Envigado", "Fredonia", "Frontino", "Giraldo", "Girardota", "Gomez plata", "Granada", "Guadalupe", "Guarne", "Guatape", "Heliconia", "Hispania", "Itagui", "Ituango", "Jardín", "Jerico", "La ceja", "La estrella", "La pintada", "La union", "Liborina", "Maceo", "Marinilla", "Medellín", "Montebello", "Montebello", "Murindo", "Mutatá", "Nariño", "Nechi", "Necocli", "Olaya", "Peñol", "Peque", "Pueblorrico", "Puerto Berrio", "Puerto Nare", "Puerto Triunfo", "Remedios", "Retiro", "Rionegro", "Sabanalarga", "Sabaneta", "Salgar", "San Andres", "San Carlos", "San Francisco", "San Jeronimo", "San José de la Montaña", "San Juan de Urabá", "San Luis", "San Pedro", "San Pedro de Uraba", "San Rafael", "San Roque", "Santa Bárbara", "Santa Fe de Antioquia", "Santa Rosa de Osos", "Santo Domingo", "Santuario", "San Vicente", "Segovia", "Sonsón", "Sopetrán", "Támesis", "Tarazá", "Tarso", "Titiribí", "Toledo", "Turbo", "Uramita", "Urrao", "Valdivia", "Valparaiso", "Vegachi", "Venecia", "Vigía del Fuente", "Yali", "Yarumal", "Yolombo", "Yondó", "Zaragoza"],
    Atlántico: [
        "Baranoa",
        "Baranoa",
        "Barranquilla",
        "Campo de la Cruz",
        "Candelaría",
        "Galapa",
        "San Juan de Acosta",
        "Luruaco",
        "Malambo",
        "Manatí",
        "Palmar de Varela",
        "Piojo",
        "Polo Nuevo",
        "Ponedera",
        "Puerto Colombia",
        "Repelón",
        "Sabanagrande",
        "Sabanalarga",
        "Santa Lucía",
        "Santo Tomás",
        "Soledad",
        "Suan",
        "Tubara",
        "Usiacurí"
    ],
    Caquetá: [
        "Albania",
        "Belén de los Andaquíes",
        "Cartagena del Chaira",
        "Curillo",
        "El Doncello",
        "El Paujil",
        "Florencia",
        "La Montañita",
        "Milan",
        "Morelia",
        "Puerto Rico",
        "San José de Fragua",
        "San Vicente del Caguán",
        "Solano",
        "Solita",
        "Valparaíso"
    ],
    Cesar: [
        "Aguachica",
        "Agustín Codazzi",
        "Astrea",
        "Becerril",
        "Bosconia",
        "Chimichagua",
        "Chiriguaná",
        "Curumaní",
        "El Copey",
        "El Paso",
        "Gamarra",
        "González",
        "La Gloria",
        "La Jagua",
        "Ibirico",
        "Manaure",
        "Pailitas",
        "Pelaya",
        "Pueblo Bello",
        "Río de Oro",
        "Robles la Paz",
        "San Alberto",
        "San Diego",
        "San Martín",
        "Tamalameque",
        "Valledupar"
    ],
    Chocó: [
        "Acandi",
        "Alto Baudo",
        "Atrato",
        "Bagado",
        "Bahía Solano",
        "Belén de bajirá",
        "Bajo Baudo",
        "Bojayá",
        "Cantón de San Pablo",
        "Carmen del Darién",
        "Certeguí",
        "Condoto",
        "El Carmen",
        "Istmina",
        "Jurado",
        "Litoral del San Juan",
        "Lloró",
        "Medio Atrato",
        "Medio Baudo",
        "Medio San Juan",
        "Novita",
        "Nuquí",
        "Quibdó",
        "Río Iro",
        "Río Quito",
        "Riosucio",
        "San José del Palmar",
        "Sipí",
        "Tado",
        "Unguía",
        "Unión Panamericana"
    ],
    Córdoba: [
        "Ayapel",
        "Buenavista",
        "Canalete",
        "Cerete",
        "Chima",
        "Chinu",
        "Ciénaga de Oro",
        "Cotorra",
        "La Apartada",
        "Lorica",
        "Los Córdobas",
        "Momil",
        "Moñitos",
        "Montelibano",
        "Montería",
        "Planeta Rica",
        "Pueblo Nuevo",
        "Puerto Escondido",
        "Puerto Libertador",
        "Purísima",
        "Sahagun",
        "San Andrés",
        "Sotavento",
        "San Antero",
        "San Bernardo Viento",
        "San Carlos",
        "San Pelayo",
        "Tierralta",
        "Tuchin",
        "Valencia"
    ],
    Guainía: [
        "Inírida",
        "Barranco Minas",
        "Cacahual",
        "La Guadalupe",
        "Mapiripana",
        "Morichal",
        "Pana Pana",
        "Puerto Colombia",
        "San Felipe"
    ],
    Guaviare: [
        "Calamar",
        "El Retorno",
        "Miraflores",
        "San José del Guaviare"
    ],
    Huila: [
        "Acevedo",
        "Agrado",
        "Aipe",
        "Algeciras",
        "Altamira",
        "Baraya",
        "Campoalegre",
        "Colombia",
        "Elias",
        "Garzón",
        "Gigante",
        "Guadalupe",
        "Hobo",
        "Íquira",
        "Isnos",
        "La Argentina",
        "La Plata",
        "Nataga",
        "Neiva",
        "Oporapa",
        "Paicol",
        "Palermo",
        "Palestina",
        "Pital",
        "Pitalito",
        "Rivera",
        "Saladoblanco",
        "San Agustín",
        "Santa María",
        "Suaza",
        "Tarqui",
        "Tello",
        "Teruel",
        "Tesalia",
        "Timana",
        "Villavieja",
        "Yaguará"
    ],
    LaGuajira: [
        "Riohacha",
        "Albania",
        "Barranca",
        "Dibulla",
        "Distracción",
        "El Molino",
        "Fonseca",
        "La Jagua del Pilar",
        "Maicao",
        "Manaure",
        "San Juan del Cesar",
        "Urumita",
        "Villa Nueva"
    ],
    Putumayo: [
        "Colón",
        "Mocoa",
        "Orito",
        "Puerto Asís",
        "Puerto Caicedo",
        "Puerto Guzman",
        "Leguizamo",
        "San Francisco",
        "San Miguel",
        "Santiago",
        "Sibundoy",
        "Valle del Guamuez",
        "Villagarzón"
    ],
    Quindío: [
        "Armenia",
        "Buenavista",
        "Calarca",
        "Circasia",
        "Córdoba",
        "Filandia",
        "Genova",
        "La Tebaida",
        "Montenegro",
        "Pijao",
        "Quimbaya",
        "Salento"
    ],
    'San Andrés y Providencia': [
        "Providencia",
        "San Andrés y Providencia"
    ],
    Sucre: [
        "Buenavista",
        "Caimito",
        "Chalán",
        "Colosó",
        "Coveñas",
        "Corozal",
        "El Roble",
        "Galeras",
        "Guaranda",
        "La Unión",
        "Los Palmitos",
        "Majagual",
        "Morroa",
        "Ovejas",
        "Palmito",
        "Sampués",
        "San Benito Abad",
        "San Juan de Betulia",
        "San Marcos",
        "San Onofre",
        "San Pedro",
        "Sincé",
        "Sincelejo",
        "Sucre",
        "Tolú",
        "Toluviejo"
    ],
    Tolima: [
        "Alpujarra",
        "Alvarado",
        "Ambalema",
        "Anzoátegui",
        "Ataco",
        "Cajamarca",
        "Carmen de Apicalá",
        "Casabianca",
        "Chaparral",
        "Coello",
        "Coyaima",
        "Cunday",
        "Dolores",
        "Espinal",
        "Falán",
        "Flandes",
        "Fresno",
        "Guamo",
        "Guayabal",
        "Herveo",
        "Honda",
        "Ibagué",
        "Icononzo",
        "Lérida",
        "Líbano",
        "Mariquita",
        "Melgar",
        "Murillo",
        "Natagaima",
        "Ortega",
        "Palocabildo",
        "Piedras",
        "Planadas",
        "Prado",
        "Purificación",
        "Rioblanco",
        "Roncesvalles",
        "Rovira",
        "Saldaña",
        "San Antonio",
        "San Luis",
        "Santa Isabel",
        "Suárez",
        "Valle de San Juan",
        "Venadillo",
        "Villahermosa",
        "Villarrica"
    ],
    Vaupés: [
        "Cacarú",
        "Mitú",
        "Papunaua",
        "Pacoa",
        "Taraira",
        "Yavaraté"
    ],
    Vichada: [
        "Cumaribó",
        "La Primavera",
        "Puerto Carreño",
        "Santa Rosalia"
    ]
};

//x = ciudades["Vichada"];
//estamos mostrando una ubicacion en especifico del array

/*
x= ciudades.Vichada[0];
//alert(x);
//aca estamos mostrando la posiciom especifica de un vector de manera numerica
var a = ciudades.Vichada.indexOf("La Primavera");
//alert(a);

function myFunction($op){
    if($op==1){
x= ciudades.Amazonas.slice(0,100);
    }else if($op==2){
    x= ciudades.Atlántico.slice(0,100);
    }else if($op==3){
x=ciudades.Caquetá[0];
    }
    document.getElementById("demo").innerHTML = x;

$("#demo").text(ciudades.Vichada);
}*/

function cambiaCiudad() {
    //todo el valor del select del departamento que elegimos
    var departamento;
    departamento = document.formulario.departamento[document.formulario.departamento.selectedIndex].value;

    if (departamento != 0) {

        mis_ciudades = ciudades[departamento];

        num_ciudades = mis_ciudades.length;

        document.formulario.ciudad.length = num_ciudades;

        for (i = 0; i < num_ciudades; i++) {
            document.formulario.ciudad.options[i].value = mis_ciudades[i];
            document.formulario.ciudad.options[i].text = mis_ciudades[i];

        }
    } else if (departamento == Departamento) {

        document.formulario.ciudad.length = 1;

        document.formulario.ciudad.options[0].value = "-";
        document.formulario.ciudad.options[0].text = "-";
    }

    document.formulario.ciudad.options[0].selected = true;

}

function Validacion() {
    var nombre = document.getElementById("nombre").value;
    if (nombre == null || !isNaN(nombre)) {
        alert("Nombre incorrecto");
        return false;

        var email = document.getElementById('email').value;
        if (email == null || !(/\S+@\S+\.\S+/.test(email))) {
            //nuevo
            if (!filter_var(email, FILTER_VALIDATE_EMAIL)) {
                alert("Email incorrecto");
                return false;
            }
        }
    }
    return true;

}