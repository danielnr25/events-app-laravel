<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            [
                "user_id" => 2,
                "title" => "Grupo 5",
                "slug" => "grupo-5",
                "extract" => "Grupo 5, es considerada como la agrupación de cumbia más exitosa del momento, fue creado un 31 de Enero del año 1973 en Monsefú-Chiclayo.",
                "description" => "Una historia musical llena de grandes alegrías y mucho sacrificio. Grupo 5, es considerada como la agrupación de cumbia más exitosa del momento, fue creado un 31 de Enero del año 1973 en Monsefú-Chiclayo por los hermanos Elmer y Víctor Yaipén Uypán. Los éxitos empezaron con los temas Recuérdame y No pongas ese disco, esta última producción editada también por la disquera Microfón en la Argentina, logrando la tan ansiada internacionalización.",
                "imagen" => "https://larepublica.cronosmedia.glr.pe/migration/images/ESHKCE7655G7ZCNIMUAWKGPULE.jpg",
                "price" => 94999.99,
                "phone" => "123456789",
                "address" => "Monsefú",
                "city" => "Chiclayo",
                "contact" => "Elmer Yaipén Uypán",
                "web" => "https://www.grupo5.pe/",
                "categories" => [1]
            ],
            [
                "user_id" => 2,
                "title" => "Evento 2",
                "slug" => "evento-2",
                "extract" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.",
                "imagen" => "https://images.pexels.com/photos/6518020/pexels-photo-6518020.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "price" => 59.99,
                "phone" => "123456789",
                "address" => "Av. Los Olivos 123",
                "city" => "Lima",
                "contact" => "Juan Perez",
                "web" => "https://www.google.com",
                "categories" => [3]
            ],
            [
                "user_id" => 3,
                "title" => "Armonia 10",
                "slug" => "armonia-10",
                "extract" => "Armonía 10 es una orquesta peruana de cumbia fundada en 1972 en la ciudad de Piura. Es considerada como una de las orquestas más importantes de la cumbia peruana.",
                "description" => "Armonía 10 es una orquesta peruana de cumbia fundada en 1972 en la ciudad de Piura. Es considerada como una de las orquestas más importantes de la cumbia peruana. La orquesta fue fundada por el músico Genaro Tello y su esposa, la cantante Edita Guerrero Neira. La orquesta fue fundada por el músico Genaro Tello y su esposa, la cantante Edita Guerrero Neira. La orquesta fue fundada por el músico Genaro Tello y su esposa, la cantante Edita Guerrero Neira.",
                "imagen" => "https://caretas.pe/wp-content/uploads/2021/01/armonia-10-anuncio-nuevos-conciertos-23f62.jpg",
                "price" => 49999.99,
                "phone" => "123456789",
                "address" => "Piura",
                "city" => "Piura",
                "contact" => "Genaro Tello",
                "web" => "https://www.armonia10.com/",
                "categories" => [1]
            ],
            [
                "user_id" => 4,
                "title" => "Caribeños de Guadalupe",
                "slug" => "caribenos-de-guadalupe",
                "extract" => "Los Caribeños de Guadalupe es una orquesta peruana de cumbia fundada en 1972 en la ciudad de la Libertad. Es considerada como una de las orquestas más importantes de la cumbia peruana.",
                "description" => "Fue fundada en 1971 bajo el nombre de Ritmo Boys por Santiago Aspericueta Reyes. En 1974 cambió su nombre Caribeños de Guadalupe, que se mantiene en la actualidad. La agrupación se incursionó en el género de la cumbia nacional por sus 500 composiciones, en que su primer disco denominado Mentirosa se estrenó en 2003, instantes después de su llegada a Lima para telonear a Agua Marina.",
                "imagen" => "https://radiokaribena.pe/wp-content/uploads/2023/05/caribenos-de-guadalupe-historia-biografia-inicios-1170x612.png",
                "price" => 39999.99,
                "phone" => "123456789",
                "address" => "La Libertad",
                "city" => "Trujillo",
                "contact" => "Santiago Aspericueta Reyes",
                "web" => "https://www.caribenos.com.pe/",
                "categories" => [1]
            ],
            [
                "user_id" => 4,
                "title" => "Agua Marina",
                "slug" => "agua-marina",
                "extract" => "Agua Marina tiene 45 años de actividad, desde su fundación el 30 de agosto de 1976. La orquesta celebra en esta fecha la primera presentación que realizaron, la cual ocurrió en la Comisaría de Sechura, en Piura.",
                "description" => "La orquesta Agua Marina nació el año 1976, en la ciudad de Sechura, región Piura. Los hermanos José y Manuel Quiroga Querevalú son los fundadores, y desde muy pequeños demostraron inclinación por la música.El primero en unirse a un agrupación fue Manuel. La banda se llamaba Sangre Joven y estaba conformada por sus compañeros de colegio. Tocaban en algunos locales y presentaciones, pero tiempo después se separaron.",
                "imagen" => "https://imgmedia.larepublica.pe/640x377/larepublica/original/2023/05/19/64678d27486cac71312bb22a.webp",
                "price" => 49999.99,
                "phone" => "123456789",
                "address" => "Sechura",
                "city" => "Piura",
                "contact" => "José y Manuel Quiroga Querevalú",
                "web" => "https://www.aguamarina.pe/",
                "categories" => [1]
            ],
            [
                "user_id" => 3,
                "title" => "Evento 3",
                "slug" => "evento-3",
                "extract" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.",
                "imagen" => "https://images.pexels.com/photos/6518020/pexels-photo-6518020.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "price" => 59.99,
                "phone" => "123456789",
                "address" => "Av. Los Olivos 123",
                "city" => "Lima",
                "contact" => "Juan Perez",
                "web" => "https://www.google.com",
                "categories" => [2]
            ],
            [
                "user_id" => 3,
                "title" => "Evento 4",
                "slug" => "evento-4",
                "extract" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.",
                "imagen" => "https://images.pexels.com/photos/6518020/pexels-photo-6518020.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "price" => 59.99,
                "phone" => "123456789",
                "address" => "Av. Los Olivos 123",
                "city" => "Lima",
                "contact" => "Juan Perez",
                "web" => "https://www.google.com",
                "categories" => [4]
            ],
            [
                "user_id" => 2,
                "title" => "Evento 5",
                "slug" => "evento-5",
                "extract" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.",
                "imagen" => "https://images.pexels.com/photos/6518020/pexels-photo-6518020.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "price" => 59.99,
                "phone" => "123456789",
                "address" => "Av. Los Olivos 123",
                "city" => "Lima",
                "contact" => "Juan Perez",
                "web" => "https://www.google.com",
                "categories" => [3]
            ],
        ];

        foreach ($events as $event) {
            $categories = $event["categories"];
            //dd($event, $categories);
            unset($event["categories"]);
            $model = Event::create($event);
            $model->categories()->sync($categories);
        }
    }
}
