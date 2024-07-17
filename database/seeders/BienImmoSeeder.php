<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BienImmoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $biens = [
            [
                'typeBien_id' => 1,
                'titre_annonce' => 'Maison familiale avec grand jardin',
                'contenu_annonce' => 'Belle maison familiale avec un grand jardin, située dans un quartier calme.
                                      Cette maison offre un espace de vie généreux avec une superficie de 120 m². Elle
                                      se compose de 6 pièces principales dont 3 chambres spacieuses et lumineuses, idéales
                                      pour une famille. La cuisine est entièrement équipée et ouverte sur le séjour,
                                      offrant un espace convivial pour les repas en famille. Le salon dispose d\'une
                                      cheminée, parfait pour les soirées d\'hiver. Le grand jardin de 500 m² est un
                                      véritable atout pour cette maison. Il offre un espace de jeu sécurisé pour les
                                      enfants et un espace détente pour les adultes. Un garage est également disponible,
                                      pouvant accueillir deux voitures. Située à proximité des écoles, des commerces et
                                      des transports en commun, cette maison est parfaite pour une famille recherchant
                                      la tranquillité tout en étant proche de toutes les commodités. Ne manquez pas cette
                                      opportunité de vivre dans un cadre de vie agréable et paisible.',
                'prix' => 1400.00,
                'adresse' => '23 Rue de Clichy',
                'ville' => 'Paris',
                'code_postal' => '75000',
                'surface' => 120,
                'nb_pieces' => 6,
                'nb_chambres' => 3,
                'nb_sdb' => 1,
                'achat' => false,
                'neuf' => false,
                'garage' => true,
                'terrain' => true,
                'disponible' => true,
                'images' => [
                    'bien1-1.jpg',
                    'bien1-2.jpg',
                    'bien1-3.jpg',
                    'bien1-4.jpg',
                ]
            ],
            [
                'typeBien_id' => 2,
                'titre_annonce' => 'Appartement neuf et moderne en centre-ville',
                'contenu_annonce' => 'Appartement moderne avec toutes les commodités, idéalement situé en centre-ville.
                                      Ce superbe appartement de 80 m² se trouve au troisième étage d\'un immeuble sécurisé
                                      avec ascenseur. Il dispose de 4 pièces principales, dont 2 chambres confortables.
                                      La pièce à vivre est spacieuse et lumineuse, grâce à ses grandes fenêtres qui
                                      offrent une vue imprenable sur la ville. La cuisine est entièrement équipée avec
                                      des appareils modernes et un plan de travail en granit. La salle de bains est dotée
                                      d\'une baignoire et de rangements intégrés. Cet appartement est idéal pour les jeunes
                                      professionnels ou les couples à la recherche d\'un logement confortable et bien situé.
                                      Le bâtiment est à proximité immédiate des boutiques, restaurants, et transports en
                                      commun, facilitant ainsi la vie quotidienne. Un parking souterrain est également
                                      disponible. Avec ses finitions modernes et son emplacement de choix, cet appartement
                                      représente une opportunité rare à ne pas manquer.',
                'prix' => 970.00,
                'adresse' => '6 Rue d\'Abdeville',
                'ville' => 'Paris',
                'code_postal' => '75000',
                'surface' => 80,
                'nb_pieces' => 4,
                'nb_chambres' => 2,
                'nb_sdb' => 1,
                'achat' => false,
                'neuf' => true,
                'garage' => false,
                'terrain' => false,
                'disponible' => false,
                'images' => [
                    'bien2-1.jpg',
                    'bien2-2.jpg',
                    'bien2-3.jpg',
                ]
            ],
            [
                'typeBien_id' => 3,
                'titre_annonce' => 'Terrain constructible en périphérie',
                'contenu_annonce' => 'Grand terrain constructible, parfait pour un projet immobilier, situé en
                                      périphérie de la ville. Ce terrain de 2000 m² est idéalement placé dans une zone
                                      en pleine expansion. Il offre de nombreuses possibilités pour la construction
                                      d\'une maison individuelle ou d\'un projet immobilier de plus grande envergure. Le
                                      terrain est plat et facile d\'accès, avec une vue dégagée sur la campagne environnante.
                                      Les réseaux d\'eau, d\'électricité et de gaz sont à proximité, ce qui facilite les
                                      raccordements nécessaires pour la construction. Situé à quelques minutes en voiture
                                      du centre-ville de Lyon, ce terrain offre la tranquillité de la campagne
                                      tout en étant proche des commodités urbaines. Les écoles, commerces et services
                                      sont facilement accessibles. Ce terrain représente une opportunité unique pour les
                                      investisseurs et les promoteurs immobiliers. Avec son grand espace et son emplacement
                                      stratégique, il est parfaitement adapté pour réaliser un projet de qualité. Ne
                                      manquez pas cette chance de développer un projet immobilier dans une région prisée.',
                'prix' => 150000.00,
                'adresse' => '62 Rue Jean Sarrazin',
                'ville' => 'Lyon',
                'code_postal' => '69008',
                'surface' => 2000,
                'nb_pieces' => 0,
                'nb_chambres' => 0,
                'nb_sdb' => 0,
                'achat' => true,
                'neuf' => false,
                'garage' => false,
                'terrain' => true,
                'disponible' => true,
                'images' => [
                    'bien3-1.jpg',
                ]
            ],
            [
                'typeBien_id' => 1,
                'titre_annonce' => 'Charmante maison avec piscine et vue sur la mer',
                'contenu_annonce' => 'Découvrez cette magnifique maison avec vue imprenable sur la mer, située dans un
                                      quartier résidentiel très recherché. La maison offre une superficie de 180 m² avec
                                      un grand salon lumineux, une cuisine moderne entièrement équipée, et quatre chambres
                                      spacieuses, dont une suite parentale avec salle de bains privative. À l\'extérieur,
                                      vous trouverez une superbe piscine entourée d\'un espace terrasse parfait pour les
                                      repas en plein air. Le jardin paysager ajoute à la beauté de cette propriété, tandis
                                      que le garage double assure un espace de stationnement sécurisé. Cette maison est
                                      un véritable havre de paix, idéal pour les familles en quête de confort et de
                                      tranquillité.',
                'prix' => 750000.00,
                'adresse' => '11 Bd Franck Pilatte',
                'ville' => 'Nice',
                'code_postal' => '06000',
                'surface' => 180,
                'nb_pieces' => 7,
                'nb_chambres' => 3,
                'nb_sdb' => 2,
                'achat' => true,
                'neuf' => false,
                'garage' => true,
                'terrain' => true,
                'disponible' => true,
                'images' => [
                    'bien4-1.jpg',
                    'bien4-2.jpg',
                    'bien4-3.jpg',
                ]
            ],
            [
                'typeBien_id' => 2,
                'titre_annonce' => 'Appartement rénové avec terrasse au coeur de Lyon',
                'contenu_annonce' => 'Ce superbe appartement de 95 m² situé dans le centre de Lyon vient d\'être
                                      entièrement rénové avec des matériaux de haute qualité. Il dispose d\'une grande
                                      terrasse offrant une vue panoramique sur la ville, idéale pour profiter des soirées
                                      d\'été. L\'appartement se compose de 5 pièces dont un séjour spacieux, une cuisine
                                      ouverte moderne, et trois chambres confortables. La salle de bains est équipée
                                      d\'une douche à l\'italienne et d\'un double lavabo. Vous apprécierez également
                                      la proximité immédiate des boutiques, restaurants et transports en commun. Une
                                      place de parking en sous-sol complète ce bien rare sur le marché.',
                'prix' => 1047.00,
                'adresse' => '78 Rue de la République',
                'ville' => 'Lyon',
                'code_postal' => '69002',
                'surface' => 95,
                'nb_pieces' => 4,
                'nb_chambres' => 1,
                'nb_sdb' => 1,
                'achat' => false,
                'neuf' => true,
                'garage' => true,
                'terrain' => false,
                'disponible' => true,
                'images' => [
                    'bien5-1.jpg',
                    'bien5-2.jpg',
                    'bien5-3.jpg',
                ]
            ],
            [
                'typeBien_id' => 3,
                'titre_annonce' => 'Terrain en bordure de lac avec permis de construire',
                'contenu_annonce' => 'Situé en bordure d\'un magnifique lac, ce terrain de 1500 m² est prêt pour la
                                      construction avec tous les permis nécessaires déjà obtenus. Idéal pour la
                                      réalisation d\'une maison de vacances ou d\'une résidence principale, le terrain
                                      bénéficie d\'une vue imprenable sur le lac et la campagne environnante. Il est
                                      desservi par les réseaux d\'eau, d\'électricité et d\'assainissement. Sa localisation
                                      privilégiée à seulement 30 minutes de la ville en fait un endroit idéal pour se
                                      détendre tout en étant proche des commodités urbaines.',
                'prix' => 200000.00,
                'adresse' => '20 Chem. de la Puya',
                'ville' => 'Annecy',
                'code_postal' => '74000',
                'surface' => 1500,
                'nb_pieces' => 0,
                'nb_chambres' => 0,
                'nb_sdb' => 0,
                'achat' => true,
                'neuf' => false,
                'garage' => false,
                'terrain' => true,
                'disponible' => true,
                'images' => [
                    'bien6-1.jpg',
                    'bien6-2.jpg',
                ]
            ],
            [
                'typeBien_id' => 1,
                'titre_annonce' => 'Maison contemporaine avec vue sur les vignes',
                'contenu_annonce' => 'Cette maison contemporaine de 200 m² est située dans un cadre pittoresque avec vue
                                      sur les vignes et champs de moutarde. Elle comprend un vaste espace de vie ouvert
                                      avec des baies vitrées qui laissent entrer une lumière naturelle abondante. La
                                      maison est dotée de trois chambres avec placards intégrés, dont une suite parentale
                                      avec salle de bains et dressing. La cuisine moderne dispose d\'un îlot central et
                                      est équipée de tous les appareils nécessaires. À l\'extérieur, un grand jardin
                                      paysager avec une terrasse et une piscine ajoute au confort et à la détente. Le
                                      garage peut accueillir deux véhicules et un espace de rangement est également disponible.',
                'prix' => 950000.00,
                'adresse' => '31 Rue des Ecayennes',
                'ville' => 'Dijon',
                'code_postal' => '21000',
                'surface' => 200,
                'nb_pieces' => 8,
                'nb_chambres' => 3,
                'nb_sdb' => 2,
                'achat' => true,
                'neuf' => false,
                'garage' => true,
                'terrain' => true,
                'disponible' => true,
                'images' => [
                    'bien7-1.jpg',
                    'bien7-2.jpg',
                    'bien7-3.jpg',
                ]
            ],
            [
                'typeBien_id' => 3,
                'titre_annonce' => 'Terrain agricole avec accès direct à la route principale',
                'contenu_annonce' => 'Ce terrain agricole de 3000 m² est situé en périphérie d\'une petite ville,
                                      avec un accès direct à la route principale. Idéal pour des projets agricoles ou
                                      pour la construction d\'une ferme, il est parfaitement adapté pour diverses
                                      cultures ou élevages. Le terrain est plat et dispose d\'un bon sol fertile. Il est
                                      également possible d\'obtenir des permis pour la construction d\'un hangar ou
                                      d\'une serre. La proximité avec la route principale facilite l\'accès aux livraisons
                                      et aux services. Ne manquez pas cette opportunité de posséder un bien avec un
                                      potentiel significatif pour vos projets agricoles.',
                'prix' => 1500.00,
                'adresse' => '5 Rue Maury',
                'ville' => 'Toulouse',
                'code_postal' => '31000',
                'surface' => 3000,
                'nb_pieces' => 0,
                'nb_chambres' => 0,
                'nb_sdb' => 0,
                'achat' => false,
                'neuf' => false,
                'garage' => false,
                'terrain' => true,
                'disponible' => false,
                'images' => [
                    'bien8-1.jpg',
                ]
            ],
            [
                'typeBien_id' => 2,
                'titre_annonce' => 'Appartement cosy avec balcon dans un quartier branché',
                'contenu_annonce' => 'Ce charmant appartement de 65 m² est situé dans un quartier dynamique et tendance.
                                      Il offre un espace de vie ouvert avec un séjour lumineux donnant sur un balcon
                                      privé. L\'appartement comprend une cuisine équipée avec un coin repas, une chambre
                                      avec rangement et une salle de bains moderne. Idéal pour les jeunes professionnels
                                      ou les couples, il se trouve à proximité des boutiques, cafés et transports en commun.
                                      Le bâtiment est bien entretenu et dispose d\'un ascenseur. Ce bien est parfait pour
                                      ceux qui recherchent le confort et le style dans un emplacement central.',
                'prix' => 215000.00,
                'adresse' => '13 Rue Toussaint-Féron',
                'ville' => 'Paris',
                'code_postal' => '75000',
                'surface' => 65,
                'nb_pieces' => 3,
                'nb_chambres' => 1,
                'nb_sdb' => 1,
                'achat' => true,
                'neuf' => true,
                'garage' => false,
                'terrain' => false,
                'disponible' => true,
                'images' => [
                    'bien9-1.jpg',
                    'bien9-2.jpg',
                ]
            ],
            [
                'typeBien_id' => 2,
                'titre_annonce' => 'Duplex moderne avec vue sur la ville',
                'contenu_annonce' => 'Ce superbe duplex de 80 m² est situé dans un quartier prisé et offre une vue imprenable sur la ville.
                          Avec son espace de vie spacieux et lumineux, il comprend un salon-salle à manger ouvert sur une cuisine
                          américaine équipée. À l\'étage, vous trouverez deux chambres avec placards intégrés et une salle de bains
                          contemporaine. Parfait pour les familles ou les jeunes couples, ce bien est proche des écoles, des
                          commerces et des transports en commun. Le bâtiment est sécurisé et dispose d\'un ascenseur et d\'un
                          parking souterrain.',
                'prix' => 325000.00,
                'adresse' => '15 Rue Claudius Pionchon',
                'ville' => 'Lyon',
                'code_postal' => '69003',
                'surface' => 80,
                'nb_pieces' => 4,
                'nb_chambres' => 2,
                'nb_sdb' => 1,
                'achat' => true,
                'neuf' => true,
                'garage' => true,
                'terrain' => false,
                'disponible' => true,
                'images' => [
                    'bien10-1.jpg',
                    'bien10-2.jpg',
                    'bien10-3.jpg',
                ]
            ],
            [
                'typeBien_id' => 2,
                'titre_annonce' => 'Studio cosy avec terrasse dans quartier animé',
                'contenu_annonce' => 'Ce studio de 40 m² offre un espace de vie optimisé et moderne. Situé dans un quartier vivant,
                          il dispose d\'une grande pièce à vivre avec une kitchenette équipée et un coin repas. La salle de bains
                          est fonctionnelle et récente. La terrasse privée est parfaite pour profiter des beaux jours. Idéal pour
                          les étudiants ou les jeunes professionnels, ce studio est proche des universités, des cafés et des
                          transports en commun. Le bâtiment est récent et bien entretenu avec un gardien et un accès sécurisé.',
                'prix' => 145000.00,
                'adresse' => '9 Rue de Vaucouleurs',
                'ville' => 'Paris',
                'code_postal' => '75000',
                'surface' => 28,
                'nb_pieces' => 1,
                'nb_chambres' => 0,
                'nb_sdb' => 1,
                'achat' => true,
                'neuf' => true,
                'garage' => false,
                'terrain' => false,
                'disponible' => true,
                'images' => [
                    'bien11-1.jpg',
                    'bien11-2.jpg',
                    'bien11-3.jpg',
                ]
            ],
            [
                'typeBien_id' => 1,
                'titre_annonce' => 'Maison écologique moderne avec jardin',
                'contenu_annonce' => 'Découvrez cette superbe maison familiale alliant confort moderne et respect de
                                      l\'environnement. Dotée de trois chambres spacieuses, d\'un salon lumineux avec
                                      cheminée écologique, et d\'une cuisine ouverte équipée, elle offre un cadre de vie
                                      idéal. Le jardin paysager de 800 m² dispose d\'un système d\'irrigation intelligent
                                      et d\'un potager pour les amateurs de jardinage. Profitez d\'une terrasse en bois
                                      avec vue dégagée sur la forêt environnante et d’un garage pour deux voitures. Cette
                                      maison est un véritable havre de paix, parfait pour une famille soucieuse de son empreinte écologique',
                'prix' => 1780.00,
                'adresse' => '4 Rue Emile Duclaux',
                'ville' => 'Paris',
                'code_postal' => '75000',
                'surface' => 180,
                'nb_pieces' => 5,
                'nb_chambres' => 3,
                'nb_sdb' => 1,
                'achat' => false,
                'neuf' => false,
                'garage' => true,
                'terrain' => true,
                'disponible' => true,
                'images' => [
                    'bien12-1.jpg',
                    'bien12-2.jpg',
                ]
            ],
            [
                'typeBien_id' => 2,
                'titre_annonce' => 'Appartement penthouse luxueux avec vue panoramique',
                'contenu_annonce' => 'Ce penthouse exceptionnel, situé au cœur du centre-ville, vous offre une vue
                                      imprenable sur la skyline urbaine. Avec ses quatre chambres, un grand salon ouvert
                                      avec baies vitrées, et une cuisine gourmet équipée, cet appartement incarne le luxe
                                      moderne. La terrasse privée de 150 m² est équipée d\'une piscine à débordement et
                                      d\'un espace barbecue, idéal pour les réceptions en plein air. Les finitions haut
                                      de gamme, les sols en marbre et les équipements domotiques font de ce bien une
                                      opportunité rare sur le marché. Profitez également d’un accès direct à un spa et
                                      une salle de gym privative',
                'prix' => 680000.00,
                'adresse' => '28 Rue Augereau',
                'ville' => 'Paris',
                'code_postal' => '75000',
                'surface' => 340,
                'nb_pieces' => 8,
                'nb_chambres' => 4,
                'nb_sdb' => 2,
                'achat' => true,
                'neuf' => true,
                'garage' => true,
                'terrain' => false,
                'disponible' => true,
                'images' => [
                    'bien13-1.jpg',
                    'bien13-2.jpg',
                    'bien13-3.jpg',
                    'bien13-4.jpg',
                ]
            ],
            [
                'typeBien_id' => 1,
                'titre_annonce' => 'Maison de campagne charmante avec terrain',
                'contenu_annonce' => 'Nichée dans un écrin de verdure, cette maison de campagne allie charme rustique
                                      et confort moderne. Offrant trois chambres confortables, un salon avec poutres
                                      apparentes, et une cuisine en pierre, elle est idéale pour les amateurs de
                                      tranquillité. Le terrain de 2 hectares comprend une écurie pour chevaux, un atelier
                                      de jardinage, et un verger. Une grande terrasse couverte permet de profiter des
                                      repas en extérieur tout en admirant la vue sur les collines environnantes. Parfaite
                                      pour une famille à la recherche d\'un cadre paisible, cette maison est un vrai coup de cœur.',
                'prix' => 2100.00,
                'adresse' => '2 Rue Houdart de Lamotte',
                'ville' => 'Paris',
                'code_postal' => '75000',
                'surface' => 240,
                'nb_pieces' => 5,
                'nb_chambres' => 2,
                'nb_sdb' => 1,
                'achat' => false,
                'neuf' => false,
                'garage' => false,
                'terrain' => true,
                'disponible' => true,
                'images' => [
                    'bien14-1.jpg',
                    'bien14-2.jpg',
                ]
            ],
            [
                'typeBien_id' => 2,
                'titre_annonce' => 'Appartement contemporain avec accès direct à la plage',
                'contenu_annonce' => 'Ce magnifique appartement situé en bord de plage offre un accès direct au sable fin
                                      et aux eaux cristallines. Avec deux chambres, une salle de bain moderne, et un
                                      séjour spacieux baigné de lumière naturelle, il représente la vie côtière à son
                                      meilleur. La cuisine ouverte est équipée des derniers appareils électroménagers,
                                      tandis que la terrasse privée permet de savourer les couchers de soleil sur l\'océan.
                                      Un espace de stationnement sécurisé et une piscine commune avec vue sur la mer ajoutent
                                      au confort de ce bien unique. Idéal pour ceux qui recherchent un cadre de vie idyllique
                                      en bord de mer.',
                'prix' => 197000.00,
                'adresse' => '14 Voie Georges Pompidou',
                'ville' => 'Paris',
                'code_postal' => '75000',
                'surface' => 90,
                'nb_pieces' => 4,
                'nb_chambres' => 2,
                'nb_sdb' => 1,
                'achat' => false,
                'neuf' => true,
                'garage' => true,
                'terrain' => false,
                'disponible' => true,
                'images' => [
                    'bien15-1.jpg',
                ]
            ],
            [
                'typeBien_id' => 3,
                'titre_annonce' => 'Terrain constructible avec vue imprenable sur les montagnes',
                'contenu_annonce' => 'Ce terrain de 1500 m², situé dans une région montagnarde pittoresque, est parfait
                                      pour construire la maison de vos rêves. Offrant une vue dégagée sur les sommets
                                      environnants, il bénéficie d\'une orientation optimale pour maximiser l\'ensoleillement
                                      tout au long de la journée. Le terrain est viabilisé et prêt à être développé, avec
                                      un accès facile aux routes principales tout en préservant une certaine intimité. Que
                                      vous souhaitiez un chalet en bois ou une maison contemporaine, cet emplacement idéal
                                      combine tranquillité et beauté naturelle.',
                'prix' => 140000.00,
                'adresse' => '59 Rue Spontini',
                'ville' => 'Paris',
                'code_postal' => '75000',
                'surface' => 1500,
                'nb_pieces' => 0,
                'nb_chambres' => 0,
                'nb_sdb' => 0,
                'achat' => true,
                'neuf' => false,
                'garage' => false,
                'terrain' => false,
                'disponible' => true,
                'images' => [
                    'bien16-1.jpg',
                ]
            ],
            [
                'typeBien_id' => 2,
                'titre_annonce' => 'Appartement moderne avec jardin dans résidence sécurisée',
                'contenu_annonce' => 'Situé dans une résidence sécurisée, cet appartement de deux chambres offre une vie
                                      confortable avec un jardin privatif. Le séjour lumineux s\'ouvre sur une terrasse
                                      avec accès direct au jardin, idéal pour se détendre ou recevoir des invités. La
                                      cuisine est entièrement équipée avec des appareils modernes, et la chambre principale
                                      dispose d\'une salle de bain en suite. Les espaces communs comprennent une piscine
                                      et un parc pour enfants. Ce bien est parfait pour ceux qui recherchent un mélange
                                      de sécurité, confort, et espaces extérieurs dans un cadre agréable.',
                'prix' => 845.00,
                'adresse' => '236 Rue de Tolbiac',
                'ville' => 'Paris',
                'code_postal' => '75000',
                'surface' => 86,
                'nb_pieces' => 3,
                'nb_chambres' => 1,
                'nb_sdb' => 1,
                'achat' => false,
                'neuf' => true,
                'garage' => true,
                'terrain' => true,
                'disponible' => true,
                'images' => [
                    'bien17-1.jpg',
                    'bien17-2.jpg',
                    'bien17-3.jpg',
                ]
            ],
        ];

        foreach ($biens as $bien) {
            $id_bien = DB::table('biens_immo')->insertGetId([
                'typeBien_id' => $bien['typeBien_id'],
                'titre_annonce' => $bien['titre_annonce'],
                'contenu_annonce' => $bien['contenu_annonce'],
                'prix' => $bien['prix'],
                'adresse' => $bien['adresse'],
                'ville' => $bien['ville'],
                'code_postal' => $bien['code_postal'],
                'surface' => $bien['surface'],
                'nb_pieces' => $bien['nb_pieces'],
                'nb_chambres' => $bien['nb_chambres'],
                'nb_sdb' => $bien['nb_sdb'],
                'achat' => $bien['achat'],
                'neuf' => $bien['neuf'],
                'garage' => $bien['garage'],
                'terrain' => $bien['terrain'],
                'disponible' => $bien['disponible'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            foreach ($bien['images'] as $image) {
                DB::table('Images')->insert([
                    'id_bien' => $id_bien,
                    'image_path' => 'photos/' .$image,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
    }
}
