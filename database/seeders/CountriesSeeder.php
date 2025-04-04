<?php

namespace Database\Seeders;

use App\Models\Migrants\Country;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    public function run(): void
    {
        $countries = [
            ['alpha3' => 'afg', 'name' => 'Afganistán'],
            ['alpha3' => 'ala', 'name' => 'Åland'],
            ['alpha3' => 'alb', 'name' => 'Albania'],
            ['alpha3' => 'deu', 'name' => 'Alemania'],
            ['alpha3' => 'and', 'name' => 'Andorra'],
            ['alpha3' => 'ago', 'name' => 'Angola'],
            ['alpha3' => 'aia', 'name' => 'Anguila'],
            ['alpha3' => 'ata', 'name' => 'Antártida'],
            ['alpha3' => 'atg', 'name' => 'Antigua y Barbuda'],
            ['alpha3' => 'sau', 'name' => 'Arabia Saudita'],
            ['alpha3' => 'dza', 'name' => 'Argelia'],
            ['alpha3' => 'arg', 'name' => 'Argentina'],
            ['alpha3' => 'arm', 'name' => 'Armenia'],
            ['alpha3' => 'abw', 'name' => 'Aruba'],
            ['alpha3' => 'aus', 'name' => 'Australia'],
            ['alpha3' => 'aut', 'name' => 'Austria'],
            ['alpha3' => 'aze', 'name' => 'Azerbaiyán'],
            ['alpha3' => 'bhs', 'name' => 'Bahamas'],
            ['alpha3' => 'bgd', 'name' => 'Bangladés'],
            ['alpha3' => 'brb', 'name' => 'Barbados'],
            ['alpha3' => 'bhr', 'name' => 'Baréin'],
            ['alpha3' => 'bel', 'name' => 'Bélgica'],
            ['alpha3' => 'blz', 'name' => 'Belice'],
            ['alpha3' => 'ben', 'name' => 'Benín'],
            ['alpha3' => 'bmu', 'name' => 'Bermudas'],
            ['alpha3' => 'blr', 'name' => 'Bielorrusia'],
            ['alpha3' => 'bol', 'name' => 'Bolivia'],
            ['alpha3' => 'bes', 'name' => 'Bonaire, San Eustaquio y Saba'],
            ['alpha3' => 'bih', 'name' => 'Bosnia y Herzegovina'],
            ['alpha3' => 'bwa', 'name' => 'Botsuana'],
            ['alpha3' => 'bra', 'name' => 'Brasil'],
            ['alpha3' => 'brn', 'name' => 'Brunéi'],
            ['alpha3' => 'bgr', 'name' => 'Bulgaria'],
            ['alpha3' => 'bfa', 'name' => 'Burkina Faso'],
            ['alpha3' => 'bdi', 'name' => 'Burundi'],
            ['alpha3' => 'btn', 'name' => 'Bután'],
            ['alpha3' => 'cpv', 'name' => 'Cabo Verde'],
            ['alpha3' => 'khm', 'name' => 'Camboya'],
            ['alpha3' => 'cmr', 'name' => 'Camerún'],
            ['alpha3' => 'can', 'name' => 'Canadá'],
            ['alpha3' => 'qat', 'name' => 'Catar'],
            ['alpha3' => 'tcd', 'name' => 'Chad'],
            ['alpha3' => 'chl', 'name' => 'Chile'],
            ['alpha3' => 'chn', 'name' => 'China'],
            ['alpha3' => 'cyp', 'name' => 'Chipre'],
            ['alpha3' => 'col', 'name' => 'Colombia'],
            ['alpha3' => 'com', 'name' => 'Comoras'],
            ['alpha3' => 'prk', 'name' => 'Corea del Norte'],
            ['alpha3' => 'kor', 'name' => 'Corea del Sur'],
            ['alpha3' => 'civ', 'name' => 'Costa de Marfil'],
            ['alpha3' => 'cri', 'name' => 'Costa Rica'],
            ['alpha3' => 'hrv', 'name' => 'Croacia'],
            ['alpha3' => 'cub', 'name' => 'Cuba'],
            ['alpha3' => 'cuw', 'name' => 'Curazao'],
            ['alpha3' => 'dnk', 'name' => 'Dinamarca'],
            ['alpha3' => 'dma', 'name' => 'Dominica'],
            ['alpha3' => 'ecu', 'name' => 'Ecuador'],
            ['alpha3' => 'egy', 'name' => 'Egipto'],
            ['alpha3' => 'slv', 'name' => 'El Salvador'],
            ['alpha3' => 'are', 'name' => 'Emiratos Árabes Unidos'],
            ['alpha3' => 'eri', 'name' => 'Eritrea'],
            ['alpha3' => 'svk', 'name' => 'Eslovaquia'],
            ['alpha3' => 'svn', 'name' => 'Eslovenia'],
            ['alpha3' => 'esp', 'name' => 'España'],
            ['alpha3' => 'usa', 'name' => 'Estados Unidos de América'],
            ['alpha3' => 'est', 'name' => 'Estonia'],
            ['alpha3' => 'eth', 'name' => 'Etiopía'],
            ['alpha3' => 'phl', 'name' => 'Filipinas'],
            ['alpha3' => 'fin', 'name' => 'Finlandia'],
            ['alpha3' => 'fji', 'name' => 'Fiyi'],
            ['alpha3' => 'fra', 'name' => 'Francia'],
            ['alpha3' => 'gab', 'name' => 'Gabón'],
            ['alpha3' => 'gmb', 'name' => 'Gambia'],
            ['alpha3' => 'geo', 'name' => 'Georgia'],
            ['alpha3' => 'gha', 'name' => 'Ghana'],
            ['alpha3' => 'gib', 'name' => 'Gibraltar'],
            ['alpha3' => 'grd', 'name' => 'Granada'],
            ['alpha3' => 'grc', 'name' => 'Grecia'],
            ['alpha3' => 'grl', 'name' => 'Groenlandia'],
            ['alpha3' => 'glp', 'name' => 'Guadalupe'],
            ['alpha3' => 'gum', 'name' => 'Guam'],
            ['alpha3' => 'gtm', 'name' => 'Guatemala'],
            ['alpha3' => 'guf', 'name' => 'Guayana Francesa'],
            ['alpha3' => 'ggy', 'name' => 'Guernsey'],
            ['alpha3' => 'gin', 'name' => 'Guinea'],
            ['alpha3' => 'gnb', 'name' => 'Guinea-Bisáu'],
            ['alpha3' => 'gnq', 'name' => 'Guinea Ecuatorial'],
            ['alpha3' => 'guy', 'name' => 'Guyana'],
            ['alpha3' => 'hti', 'name' => 'Haití'],
            ['alpha3' => 'hnd', 'name' => 'Honduras'],
            ['alpha3' => 'hkg', 'name' => 'Hong Kong'],
            ['alpha3' => 'hun', 'name' => 'Hungría'],
            ['alpha3' => 'ind', 'name' => 'India'],
            ['alpha3' => 'idn', 'name' => 'Indonesia'],
            ['alpha3' => 'irq', 'name' => 'Irak'],
            ['alpha3' => 'irn', 'name' => 'Irán'],
            ['alpha3' => 'irl', 'name' => 'Irlanda'],
            ['alpha3' => 'bvt', 'name' => 'Isla Bouvet'],
            ['alpha3' => 'imn', 'name' => 'Isla de Man'],
            ['alpha3' => 'cxr', 'name' => 'Isla de Navidad'],
            ['alpha3' => 'isl', 'name' => 'Islandia'],
            ['alpha3' => 'cym', 'name' => 'Islas Caimán'],
            ['alpha3' => 'cck', 'name' => 'Islas Cocos'],
            ['alpha3' => 'cok', 'name' => 'Islas Cook'],
            ['alpha3' => 'fro', 'name' => 'Islas Feroe'],
            ['alpha3' => 'sgs', 'name' => 'Islas Georgias del Sur y Sandwich del Sur'],
            ['alpha3' => 'hmd', 'name' => 'Islas Heard y McDonald'],
            ['alpha3' => 'flk', 'name' => 'Islas Malvinas'],
            ['alpha3' => 'mnp', 'name' => 'Islas Marianas del Norte'],
            ['alpha3' => 'mhl', 'name' => 'Islas Marshall'],
            ['alpha3' => 'pcn', 'name' => 'Islas Pitcairn'],
            ['alpha3' => 'slb', 'name' => 'Islas Salomón'],
            ['alpha3' => 'tca', 'name' => 'Islas Turcas y Caicos'],
            ['alpha3' => 'umi', 'name' => 'Islas Ultramarinas Menores de los Estados Unidos'],
            ['alpha3' => 'vgb', 'name' => 'Islas Vírgenes Británicas'],
            ['alpha3' => 'vir', 'name' => 'Islas Vírgenes de los Estados Unidos'],
            ['alpha3' => 'isr', 'name' => 'Israel'],
            ['alpha3' => 'ita', 'name' => 'Italia'],
            ['alpha3' => 'jam', 'name' => 'Jamaica'],
            ['alpha3' => 'jpn', 'name' => 'Japón'],
            ['alpha3' => 'jey', 'name' => 'Jersey'],
            ['alpha3' => 'jor', 'name' => 'Jordania'],
            ['alpha3' => 'kaz', 'name' => 'Kazajistán'],
            ['alpha3' => 'ken', 'name' => 'Kenia'],
            ['alpha3' => 'kgz', 'name' => 'Kirguistán'],
            ['alpha3' => 'kir', 'name' => 'Kiribati'],
            ['alpha3' => 'kwt', 'name' => 'Kuwait'],
            ['alpha3' => 'lao', 'name' => 'Laos'],
            ['alpha3' => 'lso', 'name' => 'Lesoto'],
            ['alpha3' => 'lva', 'name' => 'Letonia'],
            ['alpha3' => 'lbn', 'name' => 'Líbano'],
            ['alpha3' => 'lbr', 'name' => 'Liberia'],
            ['alpha3' => 'lby', 'name' => 'Libia'],
            ['alpha3' => 'lie', 'name' => 'Liechtenstein'],
            ['alpha3' => 'ltu', 'name' => 'Lituania'],
            ['alpha3' => 'lux', 'name' => 'Luxemburgo'],
            ['alpha3' => 'mac', 'name' => 'Macao'],
            ['alpha3' => 'mkd', 'name' => 'Macedonia del Norte'],
            ['alpha3' => 'mdg', 'name' => 'Madagascar'],
            ['alpha3' => 'mys', 'name' => 'Malasia'],
            ['alpha3' => 'mwi', 'name' => 'Malaui'],
            ['alpha3' => 'mdv', 'name' => 'Maldivas'],
            ['alpha3' => 'mli', 'name' => 'Malí'],
            ['alpha3' => 'mlt', 'name' => 'Malta'],
            ['alpha3' => 'mar', 'name' => 'Marruecos'],
            ['alpha3' => 'mtq', 'name' => 'Martinica'],
            ['alpha3' => 'mus', 'name' => 'Mauricio'],
            ['alpha3' => 'mrt', 'name' => 'Mauritania'],
            ['alpha3' => 'myt', 'name' => 'Mayotte'],
            ['alpha3' => 'mex', 'name' => 'México'],
            ['alpha3' => 'fsm', 'name' => 'Micronesia'],
            ['alpha3' => 'mda', 'name' => 'Moldavia'],
            ['alpha3' => 'mco', 'name' => 'Mónaco'],
            ['alpha3' => 'mng', 'name' => 'Mongolia'],
            ['alpha3' => 'mne', 'name' => 'Montenegro'],
            ['alpha3' => 'msr', 'name' => 'Montserrat'],
            ['alpha3' => 'moz', 'name' => 'Mozambique'],
            ['alpha3' => 'mmr', 'name' => 'Birmania'],
            ['alpha3' => 'nam', 'name' => 'Namibia'],
            ['alpha3' => 'nru', 'name' => 'Nauru'],
            ['alpha3' => 'npl', 'name' => 'Nepal'],
            ['alpha3' => 'nic', 'name' => 'Nicaragua'],
            ['alpha3' => 'ner', 'name' => 'Níger'],
            ['alpha3' => 'nga', 'name' => 'Nigeria'],
            ['alpha3' => 'niu', 'name' => 'Niue'],
            ['alpha3' => 'nfk', 'name' => 'Isla Norfolk'],
            ['alpha3' => 'nor', 'name' => 'Noruega'],
            ['alpha3' => 'ncl', 'name' => 'Nueva Caledonia'],
            ['alpha3' => 'nzl', 'name' => 'Nueva Zelanda'],
            ['alpha3' => 'omn', 'name' => 'Omán'],
            ['alpha3' => 'nld', 'name' => 'Países Bajos'],
            ['alpha3' => 'pak', 'name' => 'Pakistán'],
            ['alpha3' => 'plw', 'name' => 'Palaos'],
            ['alpha3' => 'pse', 'name' => 'Palestina'],
            ['alpha3' => 'pan', 'name' => 'Panamá'],
            ['alpha3' => 'png', 'name' => 'Papúa Nueva Guinea'],
            ['alpha3' => 'pry', 'name' => 'Paraguay'],
            ['alpha3' => 'per', 'name' => 'Perú'],
            ['alpha3' => 'pyf', 'name' => 'Polinesia Francesa'],
            ['alpha3' => 'pol', 'name' => 'Polonia'],
            ['alpha3' => 'prt', 'name' => 'Portugal'],
            ['alpha3' => 'pri', 'name' => 'Puerto Rico'],
            ['alpha3' => 'gbr', 'name' => 'Reino Unido'],
            ['alpha3' => 'esh', 'name' => 'República Árabe Saharaui Democrática'],
            ['alpha3' => 'caf', 'name' => 'República Centroafricana'],
            ['alpha3' => 'cze', 'name' => 'República Checa'],
            ['alpha3' => 'cog', 'name' => 'República del Congo'],
            ['alpha3' => 'cod', 'name' => 'República Democrática del Congo'],
            ['alpha3' => 'dom', 'name' => 'República Dominicana'],
            ['alpha3' => 'reu', 'name' => 'Reunión'],
            ['alpha3' => 'rwa', 'name' => 'Ruanda'],
            ['alpha3' => 'rou', 'name' => 'Rumania'],
            ['alpha3' => 'rus', 'name' => 'Rusia'],
            ['alpha3' => 'wsm', 'name' => 'Samoa'],
            ['alpha3' => 'asm', 'name' => 'Samoa Americana'],
            ['alpha3' => 'blm', 'name' => 'San Bartolomé'],
            ['alpha3' => 'kna', 'name' => 'San Cristóbal y Nieves'],
            ['alpha3' => 'smr', 'name' => 'San Marino'],
            ['alpha3' => 'maf', 'name' => 'San Martín'],
            ['alpha3' => 'spm', 'name' => 'San Pedro y Miquelón'],
            ['alpha3' => 'vct', 'name' => 'San Vicente y las Granadinas'],
            ['alpha3' => 'shn', 'name' => 'Santa Elena, Ascensión y Tristán de Acuña'],
            ['alpha3' => 'lca', 'name' => 'Santa Lucía'],
            ['alpha3' => 'stp', 'name' => 'Santo Tomé y Príncipe'],
            ['alpha3' => 'sen', 'name' => 'Senegal'],
            ['alpha3' => 'srb', 'name' => 'Serbia'],
            ['alpha3' => 'syc', 'name' => 'Seychelles'],
            ['alpha3' => 'sle', 'name' => 'Sierra Leona'],
            ['alpha3' => 'sgp', 'name' => 'Singapur'],
            ['alpha3' => 'sxm', 'name' => 'San Martín'],
            ['alpha3' => 'syr', 'name' => 'Siria'],
            ['alpha3' => 'som', 'name' => 'Somalia'],
            ['alpha3' => 'lka', 'name' => 'Sri Lanka'],
            ['alpha3' => 'swz', 'name' => 'Suazilandia'],
            ['alpha3' => 'zaf', 'name' => 'Sudáfrica'],
            ['alpha3' => 'sdn', 'name' => 'Sudán'],
            ['alpha3' => 'ssd', 'name' => 'Sudán del Sur'],
            ['alpha3' => 'swe', 'name' => 'Suecia'],
            ['alpha3' => 'che', 'name' => 'Suiza'],
            ['alpha3' => 'sur', 'name' => 'Surinam'],
            ['alpha3' => 'sjm', 'name' => 'Svalbard y Jan Mayen'],
            ['alpha3' => 'tha', 'name' => 'Tailandia'],
            ['alpha3' => 'twn', 'name' => 'Taiwán (República de China)'],
            ['alpha3' => 'tza', 'name' => 'Tanzania'],
            ['alpha3' => 'tjk', 'name' => 'Tayikistán'],
            ['alpha3' => 'iot', 'name' => 'Territorio Británico del Océano Índico'],
            ['alpha3' => 'atf', 'name' => 'Tierras Australes y Antárticas Francesas'],
            ['alpha3' => 'tls', 'name' => 'Timor Oriental'],
            ['alpha3' => 'tgo', 'name' => 'Togo'],
            ['alpha3' => 'tkl', 'name' => 'Tokelau'],
            ['alpha3' => 'ton', 'name' => 'Tonga'],
            ['alpha3' => 'tto', 'name' => 'Trinidad y Tobago'],
            ['alpha3' => 'tun', 'name' => 'Túnez'],
            ['alpha3' => 'tkm', 'name' => 'Turkmenistán'],
            ['alpha3' => 'tur', 'name' => 'Turquía'],
            ['alpha3' => 'tuv', 'name' => 'Tuvalu'],
            ['alpha3' => 'ukr', 'name' => 'Ucrania'],
            ['alpha3' => 'uga', 'name' => 'Uganda'],
            ['alpha3' => 'ury', 'name' => 'Uruguay'],
            ['alpha3' => 'uzb', 'name' => 'Uzbekistán'],
            ['alpha3' => 'vut', 'name' => 'Vanuatu'],
            ['alpha3' => 'vat', 'name' => 'Vaticano, Ciudad del'],
            ['alpha3' => 'ven', 'name' => 'Venezuela'],
            ['alpha3' => 'vnm', 'name' => 'Vietnam'],
            ['alpha3' => 'wlf', 'name' => 'Wallis y Futuna'],
            ['alpha3' => 'yem', 'name' => 'Yemen'],
            ['alpha3' => 'dji', 'name' => 'Yibuti'],
            ['alpha3' => 'zmb', 'name' => 'Zambia'],
            ['alpha3' => 'zwe', 'name' => 'Zimbabue'],
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
