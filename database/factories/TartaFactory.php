<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TartaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $nombres = [
            "Red Velvet",
            "Tres chocolates",
            "Tarta de manzana",
            "Tarta de queso",
            "Tarta de fresa",
            "Tarta con crema pastelera",
            "Tarta de oreo",
            "Tiramisú",
            "Tarta de la abuela",
            "Tarta de yema"
        ];

        $imagenes = [
            "https://assets.elgourmet.com/wp-content/uploads/2023/03/red-v_kvUtb7ixJqMHo63e5OnXWyjZsfV2zP.png",
            "https://www.cocinatis.com/archivos/202207/CTIS0277-Tarta-tres-chocolates-sin-nata_desktop_horizontal_full_width.jpg",
            "https://pazodevilane.com/wp-content/uploads/2020/10/tarta-de-manzana-port.jpg",
            "https://alpina.com/media/mageplaza/blog/post/t/a/tarta-de-queso-preparala-con-estos-sencillos-trucos.jpg",
            "https://i.ytimg.com/vi/3wmLon0_7yI/maxresdefault.jpg",
            "https://i.ytimg.com/vi/vwx3RPq5APM/maxresdefault.jpg",
            "https://img.saboresdehoy.com/receta/580/tarta-de-galleta-oreo.jpg",
            "https://imagenes.20minutos.es/files/image_990_556/uploads/imagenes/2023/03/27/tiramisu.jpeg",
            "https://cflvdg.avoz.es/sc/OwNoBHfFz_Vqnb6n6Zp3i9zppfY=/x/2023/07/31/00121690797297008138357/Foto/tarta.jpeg",
            "https://content-cocina.lecturas.com/medio/2021/07/17/paso-a-paso-para-hacer-tarta-san-marcos-resultado-final_db72b95e_1280x720.jpg",
        ];

        $color = [
            "#E90808",
            "#6B4830",
            "#ACE32D",
            "#FCEB30",
            "#ED4276",
            "#FFF5D6",
            "#6B6B6B",
            "#C9A06C",
            "#F5A842",
            "#FFE7B3",
        ];

        $aleatorio = rand(0,9);

        return [
            'nombre' => $nombres[$aleatorio],
            'precio' => $this->faker->randomFloat(2, 5, 30),
            'imagen' => $imagenes[$aleatorio],
            'color' => $color[$aleatorio],
            'ingredientes' => $this->faker->text(),
            'alergenos' => $this->faker->boolean(),
        ];
    }
}
