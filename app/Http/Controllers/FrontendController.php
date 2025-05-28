<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    

        public function contact()
    {
        return view('contact');
    }
        public function about()
    {
        return view('about');
    }
        public function education()
    {
        return view('education');
    }
        public function joinUs()
    {
        return view('join-us');
    }
        public function events()
    {
        return view('events');
    }
        public function projects()
    {
        return view('projects');
    }
        public function history()
    {
        return view('history');
    }
        public function tourism()
    {
        return view('tourism');
    }
        public function clans()
    {
        return view('clans.index');
    }

    public function showClans($clan)
    {
        $clans = [
            'yamba' => [
                'name' => 'Yamba',
                'image' => '/images/village.jpg',
                'icon' => 'fas fa-landmark',
                'description' => 'The Yamba clan, with 15 villages, is the cultural and administrative heart of Nwa Sub-Division, known for its rich heritage and vibrant community.',
                'history' => 'Situated in Nwa Sub-Division, Cameroon, the Yamba clan comprises 15 villages: NTIM, NTONG, KWAK, FA’AM, NGUNG, SIH, BOM, GOM, MFE, NWA, MBEM, NKOT, ROM, YANG, and BANG. As the administrative center of the sub-division, it plays a pivotal role in regional governance and cultural preservation.',
                'governance' => 'Each of the 15 villages is governed by a Fon, who serves as the custodian of culture and tradition, ensuring community cohesion and resolving disputes. The presence of the sub-divisional headquarters strengthens its administrative framework, supported by a Divisional Office led by the Divisional Officer.',
                'features' => 'The Yamba clan boasts essential infrastructure, including a district hospital in Nwa Central and a Baptist hospital in Mbem, providing vital healthcare services. Security is maintained through a gendarmerie brigade and a special branch police post. Prominent elites and artists contribute to cultural preservation and drive potential infrastructural development.',
                'touristic_sites' => [
                    ['name' => 'Kopdze Cave of Nwa', 'description' => 'A historic cave showcasing cultural heritage.', 'image' => '/images/site.jpg', 'icon' => 'fas fa-cave'],
                    ['name' => 'Mapong Dam of Nwa', 'description' => 'A serene dam offering breathtaking views.', 'image' => '/images/site.jpg', 'icon' => 'fas fa-water'],
                    ['name' => 'Nzebuck Dam of Mbem', 'description' => 'A picturesque dam surrounded by natural beauty.', 'image' => '/images/site.jpg', 'icon' => 'fas fa-water'],
                    ['name' => 'Majang Hill of Mbem', 'description' => 'A stunning hill with panoramic views.', 'image' => '/images/site.jpg', 'icon' => 'fas fa-mountain'],
                    ['name' => 'River Mantung', 'description' => 'A scenic river perfect for relaxation.', 'image' => '/images/site.jpg', 'icon' => 'fas fa-water'],
                    ['name' => 'Kopjwue Hill Site in Rom', 'description' => 'A cultural hill site with historical significance.', 'image' => '/images/site.jpg', 'icon' => 'fas fa-mountain'],
                    ['name' => 'Rom Rock', 'description' => 'A unique rock formation enhancing touristic appeal.', 'image' => '/images/site.jpg', 'icon' => 'fas fa-rock'],
                    ['name' => 'Yamba Palaces and Caves', 'description' => 'Cultural landmarks reflecting rich traditions.', 'image' => '/images/site.jpg', 'icon' => 'fas fa-landmark'],
                    ['name' => 'Makop of Mfe', 'description' => 'A natural site with unique geological features.', 'image' => '/images/site.jpg', 'icon' => 'fas fa-mountain'],
                ],
                'challenges' => 'The Yamba clan navigates modern challenges while preserving its cultural heritage and pursuing infrastructural development, balancing tradition with progress.',
            ],
            'mbaw' => [
                'name' => 'Mbaw',
                'image' => '/images/village.jpg', // No image, use placeholder
                'icon' => 'fas fa-leaf',
                'description' => 'The Mbaw clan, rooted in the fertile Mbaw Plain, thrives on agriculture and vibrant markets, despite challenges from farmer-grazer conflicts.',
                'history' => 'Originating from Tikar migrations driven by succession disputes, the Mbaw clan settled in the fertile Mbaw Plain, becoming the second largest clan in Nwa Sub-Division with 14 villages: NGURI, NTEM, NWANTI, NGU, MBIRIKPA, NKING, NKWAT, NGOM-SABONGARI, NYURONG, NGOMKOW, JATOR-NGWEMBE, NGAMFE-KURT, and LIH.',
                'governance' => 'Each village is led by a Fon, who maintains social order and preserves cultural heritage, ensuring the continuity of traditions across generations.',
                'features' => 'The Mbaw clan excels in agriculture, cultivating rice, corn, and palm for commercial and household use. Sabongari, a vibrant economic hub, hosts border, council, and cattle markets, an Islamic secondary school, and a Catholic mission hospital. One-phase electricity from Sop and well-maintained roads to Nigeria enhance trade and connectivity.',
                'touristic_sites' => [
                    ['name' => 'Mbaw Plain', 'description' => 'A fertile plain ideal for agricultural tourism.', 'image' => '/images/site.jpg', 'icon' => 'fas fa-leaf'],
                    ['name' => 'Sabongari Markets', 'description' => 'Vibrant markets offering a cultural experience.', 'image' => '/images/site.jpg', 'icon' => 'fas fa-market'],
                ],
                'challenges' => 'Farmer-grazer conflicts have escalated, causing violence, food shortages, and social fragmentation. Sustainable land management and conflict resolution are critical to restoring harmony and economic stability.',
            ],
            'mfumte' => [
                'name' => 'Mfumte',
                'image' => '/images/village.jpg',
                'icon' => 'fas fa-mountain',
                'description' => 'The Mfumte clan, near the Cameroon-Nigeria border, is known for its hospitality and touristic potential, with scenic hills and historic caves.',
                'history' => 'The smallest clan in Nwa Sub-Division, Mfumte comprises 13 villages (ADERE, BITUI, NCHIA, LUS, KOM, MBALLA, JUI, KOFFA, MANANG, MBAH, MBAT, MBEPJI, SA’AM), strategically located near the Cameroon-Nigeria border, fostering trade and cultural exchange.',
                'governance' => 'Each village is governed by a Fon, with the Mfumte Cultural Development Association (MFUCUDA) coordinating community development initiatives to enhance living standards.',
                'features' => 'Lus hosts a secondary school, shaping future leaders, while a nearby military base ensures security. The clan’s border proximity offers economic opportunities through trade but also presents security challenges.',
                'touristic_sites' => [
                    ['name' => 'Mfumte Hilly Terrain', 'description' => 'Scenic hills offering hiking and breathtaking views.', 'image' => '/images/site.jpg', 'icon' => 'fas fa-mountain'],
                    ['name' => 'Mfumte Natural Caves', 'description' => 'Historic caves used during raids, now a cultural attraction.', 'image' => '/images/site.jpg', 'icon' => 'fas fa-cave'],
                    ['name' => 'Cameroon-Nigeria Border', 'description' => 'A unique location for cultural exchange and tourism.', 'image' => '/images/site.jpg', 'icon' => 'fas fa-globe'],
                ],
                'challenges' => 'Limited resources and infrastructure development needs pose challenges, but the clan’s hospitality and determination drive progress toward a prosperous future.',
            ],
        ];

        if (!isset($clans[$clan])) {
            abort(404, 'Clan not found');
        }

           $clanData = $clans[$clan]; 
    return view('clans.show', [
        'clan' => $clanData,
    ]);
    }
}
