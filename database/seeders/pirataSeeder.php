<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pirata;
use Illuminate\Support\Facades\DB;

class pirataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Agregar id blog a la tabla
        $idblog = [
            1,2,3,4,5,6,7,8,9,10,11,12
        ];
        //Agregar nombre a la tabla
        $nombre = [
            'Morgan Adams','Jack Sparrow','Simbad','Davy Jones','Luffy','Barbanegra','Capitan Garfio','Miss Fortune','Edward Kenway','Anne Bonny','Charlotte de Berry','Jack Rackham'
        ];

        //Agregar id categoria a la tabla
        $categoria = [
            2,2,2,2,2,1,2,2,2,1,1,1
        ];
        //Agregar descripcion a la tabla
        $descripcion = [
            'La capitana de "El lucero del alba", un barco pirata cuya tripulación se ve envuelta en una auténtica lucha por el tesoro, una historia de piratería de lo más clásica. 
            En esta batalla por las riquezas y alhaja escondidas, la capitana Adams tendrá que hacer frente a su tío Dawg, el hermano de su padre, el anterior capitán de "El lucero del alba".',
            'Sparrow tiene los ojos de color marrón oscuro y el pelo largo y castaño oscuro, que lleva con trenzas y rastas. Tiene una pequeña barba «de chivo» que recoge en dos trenzas. 
            Lleva varios abalorios colgados del pelo, una misteriosa moneda que reposa en la frente, señal de un título que lo hace parte de la corte de la hermandad, encima del pañuelo que 
            lleva en la cabeza, una cadena de plata y una aguja de hueso en el cabello.',
            'Un pirata astuto y hábil que ha saqueado barcos y puertos por medio mundo. Simbad nació en Siracusa y fue el mejor amigo de Proteo en la infancia, pero con la llegada de Marina, 
            se marchó para siempre de Siracusa para convertirse en pirata. Sus robos se dieron por todas partes del mundo por lo que su popularidad era bastante alta.',
            'Davy Jones, con su navío el holandés errante, recorre los mares tomando como prisioneros a los supervivientes de los navíos que previamente ha hundido o a aquellos que han sobrevivido 
            a un naufragio.',
            'Pertenece a una familia plagada de personajes conocidos mundialmente: es hijo del líder del Ejército Revolucionario y criminal más buscado del mundo, Monkey D. Dragon. se ha ganado una 
            enorme reputación en todo el mundo por causar problemas incluso entre los Siete Guerreros del Mar y la Marine, cometiendo crímenes y acciones que se consideran amenazadoras contra el Gobierno Mundial',
            'Fue un pirata inglés que operó alrededor de las Indias Occidentales y la costa este de las colonias británicas de Norteamérica a principios del siglo XVIII. Su más sonado ataque fue realizado en la 
            localidad de Charleston, Carolina del Sur, en mayo de 1718.',
            'Se describe al capitán Garfio como un hombre de rostro delgado, casi cadavérico y de profundos ojos azules melancólicos, capaces de encenderse en un rojo ígneo cuando la rabia lo poseía.',
            'Sarah Fortune, capitana de Aguasturbias famosa por su apariencia, pero temida por su brutalidad, es una figura severa entre los criminales más duros de la ciudad portuaria.',
            'Fue un corsario galés que se dedicó a la piratería durante la edad dorada de la misma, y después de su retiro fue un miembro de la Orden de los Asesinos. Natal de Swansea, Kenway se mudó a 
            Bristol, en Inglaterra, siendo muy joven, y conoció allí a la hija de un poderoso mercader, Caroline Scott. Después de su boda con la inglesa, Kenway empezó a plantearse trabajar como corsario en alta mar, 
            renunciando a la posibilidad de alistarse en la Armada Real, y partió al Mar Caribe en 1712.',
            'Fue una pirata irlandesa que operó en el Caribe durante los primeros años del siglo XVIII y una de las mujeres piratas más famosas de todos los tiempos.',
            'Fue una capitana pirata mujer de la segunda mitad del siglo XVII, aunque su historia se considera generalmente ficticia. Se cuenta que murió en la costa de África alrededor del verano de 1689, 
            asesinada por un pirata de la época.',
            'Fue un marino y capitán pirata durante el siglo XVIII. Se ganó este sobrenombre debido a las coloridas ropas de calicó que llevaba, pero aún le hizo más famoso su diseño personal de 
            bandera pirata que constaba de dos espadas en aspa bajo una calavera y por llevar a bordo a dos de las más famosas mujeres piratas: Anne Bonny y Mary Read.'
        ];

        //Agregar Imagen a la tabla
        $imagen = [
            'https://img.europapress.es/fotoweb/fotonoticia_20140724194240_1200.jpg',
            'https://img.europapress.es/fotoweb/fotonoticia_20130112175812_420.jpg',
            'https://image.jimcdn.com/app/cms/image/transf/dimension=210x1024:format=jpg/path/s39145781b4b2fa7a/image/ifa0704c71d2638cf/version/1470673417/image.jpg',
            'https://i.pinimg.com/474x/da/90/ea/da90ea8c95614fde17512c14052abf26--davy-jones-tattoo-davy-jones-pirates.jpg',
            'https://9xwallpapers.com/wp-content/uploads/2021/05/Monkey-D-Luffy-Wallpaper.jpg',
            'http://i.gyazo.com/5eb3f92f28ef940fe811df5a3cca6211.png',
            'https://www.ecured.cu/images/d/d4/CapitanGarfio.jpg',
            'https://esporters.today/__export/1602930621632/sites/gammers/img/2020/10/17/ekhvqgbx0aaxg6e.jpg_691115875.jpg',
            'https://m.media-amazon.com/images/I/51W5K9jMuNL._AC_.jpg',
            'https://upload.wikimedia.org/wikipedia/commons/4/4d/Female_pirate_Anne_Bonny.jpg',
            'https://www.pirateshowcancun.com/cms/resources/charlote-de-berry-w320.jpg',
            'https://upload.wikimedia.org/wikipedia/commons/b/b3/Rackham%2C_Jack.jpg'
        ];

        for($i=0; $i<12; $i++){
            DB::table('pirata')->insert([
                'id_blog'=>$idblog[$i],
                'nombre'=>$nombre[$i],
                'id_categoria'=>$categoria[$i],
                'descripcion'=>$descripcion[$i],
                'imagen'=>$imagen[$i]
            ]);
        }
    }
}
