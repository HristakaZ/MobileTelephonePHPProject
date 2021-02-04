<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TelephonemodelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('telephonemodels')->insert([
            [
                'id' => 1,
                'name' => 'Galaxy S10',
                'cpu' => 'Octa-core (2x2.73 GHz Mongoose M4 & 2x2.31 GHz Cortex-A75 & 4x1.95 GHz Cortex-A55) - EMEA/LATAM',
                'gpu' => 'Mali-G76 MP12 - EMEA/LATAM',
                'memory' => 'Card slot	microSDXC (uses shared SIM slot) - dual SIM model only Internal	128GB 8GB RAM, 512GB 8GB RAM  	UFS 2.1',
                'camera' => 'MAIN CAMERA	Triple	12 MP, f/1.5-2.4, 26mm (wide), 1/2.55", 1.4µm, Dual Pixel PDAF, OIS 12 MP, f/2.4, 52mm (telephoto), 1/3.6", 1.0µm, AF, OIS, 2x optical zoom 16 MP, f/2.2, 12mm (ultrawide), 1/3.1", 1.0µm, Super Steady video Features	LED flash, auto-HDR, panorama Video	4K@60fps (no EIS), 4K@30fps, 1080p@30/60/240fps, 720p@960fps, HDR10+, stereo sound rec., gyro-EIS & OIS; SELFIE CAMERA	Single	10 MP, f/1.9, 26mm (wide), 1/3", 1.22µm, Dual Pixel PDAF Features	Dual video call, Auto-HDR Video	4K@30/60fps, 1080p@30fps',
                'battery' => 'Type	Li-Ion 3400 mAh, non-removable Charging	Fast charging 15W USB Power Delivery 2.0 Fast Qi/PMA wireless charging 15W Reverse wireless charging 4.5W',
                'display' => 'Type	Dynamic AMOLED, HDR10+ Size	6.1 inches, 93.2 cm2 (~88.3% screen-to-body ratio) Resolution	1440 x 3040 pixels, 19:9 ratio (~550 ppi density) Protection	Corning Gorilla Glass 6  	Always-on display',
                'brand_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'iPhone X',
                'cpu' => 'Hexa-core 2.39 GHz (2x Monsoon + 4x Mistral)',
                'gpu' => 'Apple GPU (three-core graphics)',
                'memory' => 'Card slot	No Internal	64GB 3GB RAM, 256GB 3GB RAM  	NVMe',
                'camera' => 'MAIN CAMERA	Dual	12 MP, f/1.8, 28mm (wide), 1/3", 1.22µm, dual pixel PDAF, OIS 12 MP, f/2.4, 52mm (telephoto), 1/3.4", 1.0µm, PDAF, OIS, 2x optical zoom Features	Quad-LED dual-tone flash, HDR (photo/panorama), panorama, HDR Video	4K@24/30/60fps, 1080p@30/60/120/240fps; SELFIE CAMERA	Dual	7 MP, f/2.2, 32mm (standard) SL 3D, (depth/biometrics sensor) Features	HDR Video	1080p@30fps',
                'battery' => 'Type Li-Ion 2716 mAh, non-removable (10.35 Wh) Charging	Fast charging 15W, 50% in 30 min (advertised) USB Power Delivery 2.0 Qi wireless charging Talk time	Up to 21 h (3G) Music play	Up to 60 h',
                'display' => 'Type	Super Retina OLED, HDR10, 625 nits (typ) Size	5.8 inches, 84.4 cm2 (~82.9% screen-to-body ratio) Resolution	1125 x 2436 pixels, 19.5:9 ratio (~458 ppi density) Protection	Scratch-resistant glass, oleophobic coating  	Dolby Vision Wide color gamut 3D Touch True-tone',
                'brand_id' => 2
            ]
        ]);
    }
}
