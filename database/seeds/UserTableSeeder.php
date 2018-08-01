<?php

use App\Entities\User\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 01/08/2018
 * Time: 12:23
 */

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create([
            'user_first_name' => 'Guillaume',
            'user_last_name' => 'Catel',
            'user_address' => '14 rue du Vaugueux 14000 Caen',
            'user_gender' => 'Homme',
            'user_birth_date' => '08/03/1993',
            'user_phone' => '0659211588',
            'user_email' => 'hello@guillaumecatel.com',
            'user_login' => 'guillaume.catel',
            'password' => Hash::make('gmn82vdg'),
            'user_description' => 'Passionné par la programmation informatique et la macrotypographie, 
                                    je conçois des solutions pratiques pour tous types de clients, 
                                    et des interfaces intuitives axées sur l\'utilisateur et la compréhension.
                                    Dans le cadre de mon cursus de formation et étudiant à l\'IMIE en master d\'Ingénierie et Management de Système d’Information, 
                                    je suis actuellement à la recherche d\'une alternance pour mi-septembre 2018.',
            'user_slug' => 'guillaume.catel',
            'user_avatar' => null,
            'country_id'=>1,
            'language_id'=>1,
            'role_id' => 1,

        ]);

        User::create([
            'user_first_name' => 'Guillaume',
            'user_last_name' => 'Hess',
            'user_address' => '8 Chemin de Hanapied 14700 Versainville',
            'user_gender' => 'Homme',
            'user_birth_date' => '02/05/1986',
            'user_phone' => '0679991719',
            'user_email' => 'hess.guillaume@gmail.com',
            'user_login' => 'guillaume.hess',
            'password' => Hash::make('gotgot13'),
            'user_description' => 'Après 5 années d\'études artistiques supérieures au sein de l\'école supérieur des beaux-arts de Caen,
                                    j\'ai d\'abord orienté ma carrière vers la vente de dessins en tant qu\'artiste indépendant et 
                                    la conception / réalisation de projets artistiques et graphiques. J\'ai par la suite décidé de réaliser un bilan de compétences
                                    qui m\'a amené à entreprendre une nouvelle formation de développeur logiciel à l\'AFPA de Caen. 
                                    J\'ai donc acquis une expérience en développement d’applications client / serveur ainsi que \'en développement d\'applicationsweb et mobile.
                                    Mes expériences et mes formations m\'ont apporté une grande créativité, une capacité accrue à la réalisation de projets,
                                    seul ou en équipe, une organisation rigoureuse et une écoute active permettant l\'analyse rapide et la réponse correspondante.
                                    Je suis une personne dynamique, dotée d\'une grande adaptabilité et d\'un très bon sens du relationnel. 
                                    Je suis capable de mener à bien un projet, seul ou en équipe et de m\'organiser afin de respecter des délais courts ou sur le long terme.
                                    Je supporte facilement le stress et dispose d’une grande patience. Je maîtrise l\'anglais ce qui me permet de travailler aisément dans un environnement bilingue. 
                                    Sur le plan personnel, je suis passionné d’informatique (jeux en réseau et nouvelles technologies), 
                                    de cinéma (fantastiques, science-fiction, aventure, films nordiques), de musique (dubstep, chanson à texte, 
                                    rock, classique), de sports (équitation, handball, judo, aïkido) et de littérature (grands classiques, poésies, science-fiction, sciences humaines).
                                    Je pratique le dessin au Rotring, la photographie (shooting de modèle, en studio ou en extérieur, artistique, événementielle, 
                                    retouches), l’écriture et le chant.',
            'user_slug' => 'guillaume.hess',
            'user_avatar' => null,
            'country_id'=>1,
            'language_id'=>1,
            'role_id' => 1,
        ]);
    }

}