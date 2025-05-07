<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function dashboard(Request $request)
    {
        return view(
            "dashboard", [
                    "username" => $request->username,
                    "active" => "dashboard"
                ]
        );
    }

    public function pengelolaan(Request $request)
    {
        $listMovies = [
            "bryandrsn" => [
                ["judul" => "Interstellar", "genre" => "Sci-Fi", "tahun" => 2014, "image" => "interstellar.jpeg"],
                ["judul" => "Inception", "genre" => "Sci-Fi", "tahun" => 2010, "image" => "inception.jpeg"],
                ["judul" => "Tenet", "genre" => "Sci-Fi", "tahun" => 2020, "image" => "tenet.jpeg"],
                ["judul" => "Avatar", "genre" => "Sci-Fi", "tahun" => 2009, "image" => "avatar.jpeg"],
                ["judul" => "The Matrix", "genre" => "Sci-Fi", "tahun" => 1999, "image" => "the_matrix.jpeg"],
                ["judul" => "The Dark Knight", "genre" => "Action", "tahun" => 2008, "image" => "the_dark_knight.jpeg"],
                ["judul" => "The Shawshank Redemption", "genre" => "Drama", "tahun" => 1994, "image" => "the_shawshank_redemption.jpeg"],
                ["judul" => "Pulp Fiction", "genre" => "Crime", "tahun" => 1994, "image" => "pulp_fiction.jpeg"],
                ["judul" => "The Godfather", "genre" => "Crime", "tahun" => 1972, "image" => "the_godfather.jpeg"],
                ["judul" => "Forrest Gump", "genre" => "Drama", "tahun" => 1994, "image" => "forrest_gump.jpeg"],
                ["judul" => "The Lord of the Rings: The Return of the King", "genre" => "Fantasy", "tahun" => 2003, "image" => "the_lord_of_the_rings_the_return_of_the_king.jpeg"],
                ["judul" => "Fight Club", "genre" => "Drama", "tahun" => 1999, "image" => "fight_club.jpeg"]
            ],
            "johndoe123" => [
                ["judul" => "The Social Network", "genre" => "Biography", "tahun" => 2010, "image" => "the_social_network.jpeg"],
                ["judul" => "The Silence of the Lambs", "genre" => "Thriller", "tahun" => 1991, "image" => "the_silence_of_the_lambs.jpeg"],
                ["judul" => "The Usual Suspects", "genre" => "Crime", "tahun" => 1995, "image" => "the_usual_suspects.jpeg"],
                ["judul" => "Se7en", "genre" => "Thriller", "tahun" => 1995, "image" => "se7en.jpeg"],
                ["judul" => "The Departed", "genre" => "Crime", "tahun" => 2006, "image" => "the_departed.jpeg"],
                ["judul" => "The Prestige", "genre" => "Drama", "tahun" => 2006, "image" => "the_prestige.jpeg"],
                ["judul" => "Gladiator", "genre" => "Action", "tahun" => 2000, "image" => "gladiator.jpeg"],
                ["judul" => "The Lion King", "genre" => "Animation", "tahun" => 1994, "image" => "the_lion_king.jpeg"],
                ["judul" => "Titanic", "genre" => "Romance", "tahun" => 1997, "image" => "titanic.jpeg"],
                ["judul" => "Jurassic Park", "genre" => "Adventure", "tahun" => 1993, "image" => "jurassic_park.jpeg"],
                ["judul" => "The Avengers", "genre" => "Action", "tahun" => 2012, "image" => "avengers.jpeg"],
                ["judul" => "The Dark Knight Rises", "genre" => "Action", "tahun" => 2012, "image" => "the_dark_knight_rises.jpeg"]
            ],
            "jonasblueee21" => [
                ["judul" => "A Quiet Place", "genre" => "Horror", "tahun" => 2018, "image" => "a_quiet_place.jpeg"],
                ["judul" => "Get Out", "genre" => "Horror", "tahun" => 2017, "image" => "get_out.jpeg"],
                ["judul" => "The Conjuring", "genre" => "Horror", "tahun" => 2013, "image" => "the_conjuring.jpeg"],
                ["judul" => "Hereditary", "genre" => "Horror", "tahun" => 2018, "image" => "hereditary.jpeg"],
                ["judul" => "It", "genre" => "Horror", "tahun" => 2017, "image" => "it.jpeg"],
                ["judul" => "The Babadook", "genre" => "Horror", "tahun" => 2014, "image" => "the_babadook.jpeg"],
                ["judul" => "The Witch", "genre" => "Horror", "tahun" => 2015, "image" => "the_witch.jpeg"],
                ["judul" => "Midsommar", "genre" => "Horror", "tahun" => 2019, "image" => "midsommar.jpeg"],
                ["judul" => "The Exorcist", "genre" => "Horror", "tahun" => 1973, "image" => "the_exorcist.jpeg"],
                ["judul" => "Us", "genre" => "Horror", "tahun" => 2019, "image" => "us.jpeg"],
                ["judul" => "The Cabin in the Woods", "genre" => "Horror", "tahun" => 2011, "image" => "the_cabin_in_the_woods.jpeg"],
                ["judul" => "Train to Busan", "genre" => "Horror", "tahun" => 2016, "image" => "train_to_busan.jpeg"]
            ]
        ];

        $username = $request->username;
        $userMovies = isset($listMovies[$username]) ? $listMovies[$username] : [];
        return view('pengelolaan',
            [
                "username" => $username,
                "movies" => $userMovies,
                "active" => "pengelolaan"
            ]
        );
    }

    public function profile(Request $request)
    {
        $accounts = collect([
            [
                "name" => "Bryan Anderson",
                "username" => "bryandrsn",
                "email" => "bryanandrsn@gmail.com",
                "favGenre" => "Sci-Fi"
            ],
            [
                "name" => "John Doe",
                "username" => "johndoe123",
                "email" => "johndoe@ymail.com",
                "favGenre" => "Action"
            ],
            [
                "name" => "Jonas Blue",
                "username" => "jonasblueee21",
                "email" => "bluejonas21@gmail.com",
                "favGenre" => "Horror"
            ],
        ]);

        $account = $accounts->firstWhere("username", $request->username);

        return view("profile", [
            "username" => $request->username,
            "name" => isset($account) ? $account["name"] : "-",
            "email" => isset($account) ? $account["email"] : "-",
            "favGenre" => isset($account) ? $account["favGenre"] : "-",
            "active" => "profile"
        ]);
    }
}
