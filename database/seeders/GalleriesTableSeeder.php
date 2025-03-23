<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GalleriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('galleries')->insert([
            [
                'title' => 'The Louvre',
                'description' => 'The world’s largest art museum, home to the Mona Lisa and countless masterpieces.',
                'image' => 'gal.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'The Metropolitan Museum of Art',
                'description' => 'Located in New York City, “The Met” holds art from across centuries and continents.',
                'image' => 'met.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'The Uffizi Gallery',
                'description' => 'A treasure of Renaissance art in Florence, featuring works by Botticelli, Michelangelo, and Da Vinci.',
                'image' => 'uffizi.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Museo del Prado',
                'description' => 'Madrid’s crown jewel, showcasing Spanish masters like Velázquez and Goya.',
                'image' => 'prado.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Rijksmuseum',
                'description' => 'Amsterdam’s national museum, best known for Rembrandt’s “The Night Watch.”',
                'image' => 'rijksmuseum.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'The British Museum',
                'description' => 'Home to over 8 million works, including the Rosetta Stone and Parthenon sculptures.',
                'image' => 'british-museum.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Vatican Museums',
                'description' => 'A complex of museums housing the Sistine Chapel and extensive Renaissance art collections.',
                'image' => 'vatican.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'State Hermitage Museum',
                'description' => 'Russia’s cultural icon in St. Petersburg, featuring over 3 million items in the Winter Palace.',
                'image' => 'hermitage.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Museum of Modern Art (MoMA)',
                'description' => 'New York’s temple of modern art, showcasing works from Van Gogh to Warhol.',
                'image' => 'moma.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'The Getty Center',
                'description' => 'Los Angeles hilltop museum with European art, manuscripts, and architecture.',
                'image' => 'getty.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Tate Modern',
                'description' => 'London’s powerhouse of international modern and contemporary art.',
                'image' => 'tate.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'National Gallery of Art',
                'description' => 'Washington D.C. museum with one of the finest Western art collections in the world.',
                'image' => 'national-gallery.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Musée d’Orsay',
                'description' => 'Parisian museum in a former railway station, famous for Impressionist masterpieces.',
                'image' => 'orsay.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Solomon R. Guggenheim Museum',
                'description' => 'New York landmark with spiral architecture and avant-garde modern art collection.',
                'image' => 'guggenheim.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Art Institute of Chicago',
                'description' => 'World-class collection spanning ancient to contemporary art, including American classics.',
                'image' => 'chicago-art.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Van Gogh Museum',
                'description' => 'Amsterdam museum housing the world’s largest collection of Van Gogh’s works.',
                'image' => 'vangogh.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}