<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    public const SECTIONS = [
        [
            'id'    => 'trainingGear',
            'name'  => 'Sprzęt treningowy',
            'heading' => 'Przedstawiamy sprzęt treningowy Klubu Sportowego Komprachcice.',
            'span' => 'Sprzęt jest jednakowy dla wszystkich grup w naszym klubie.',
            'lead' => 'Zamówienia sprzętu można dokonać w każdej chwili kontaktując się pod numerem telefonu: 790 362 696 lub kierując zapytanie na adres e-mail: komprachcice.gks@pilkaopolska.pl

                    Zestaw treningowy składa się z:

                    - koszulki treningowej z nadrukiem
                    - spodenek
                    - getrów

                    Można dokonywać zamówienia na pojedyncze części ubioru np. samej koszulki.',
            'img_path' => 'storage/komplet_treningowy.jpg',
        ],

        [
            'id'    => 'howToSignIn',
            'name'  => 'jak sie zapisać?',
            'heading' => 'Jak zapisać dziecko?',
            'span' => 'See for yourself.',
            'lead' => 'Wszystkich młodych zawodników,
             którzy chcą wstąpić w szeregi naszego klubu serdecznie zapraszamy na zajęcia prowadzone przez
             wykwalifikowanych trenerów. Każde nowe dziecko może śmiało przyjść na zajęcia,
             aby spróbować czy będą to odpowiednie zajęcia dla niego.
              Podczas tych zajęć ma możliwość poznania się z trenerem i grupą rówieśników.
                    Prosimy o kontakt telefoniczny z trenerami,
                     którzy chętnie udzielą odpowiedzi na wszelkie pytania dotyczące rozpoczęcia przygody z piłką w naszym klubie.
                    Grupa skrzat (do 7. roku życia "U7") - Krzysztof Szymczak, nr kontaktowy: 693 633 543
                    Grupa żak (do 9. roku życia "U9") - Sławomir Hetmański, nr kontaktowy: 668 032 729
                    Grupa orlik (do 11. roku życia "U11") - Adrian Zyla, nr kontaktowy: 790 362 696
                    Grupa młodzik (do 13. roku życia "U13") - Adrian Zyla, nr kontaktowy: 790 362 696',
            'img_path' => 'storage/komplet_treningowy.jpg',
        ],
    ];

    public const GROUPS = [
        [
            'id'    => 'youngest',
            'name' => 'Skrzaty',
            'img_path' => 'storage/galeria/1.jpg',
            'lead' => '                        Grupę skrzatów, czyli dzieci do 7. roku życia (U7) prowadzi wspólnie dwójka trenerów:
                        Krzysztof Szymczak oraz Wiktoria Czech. Grupa jest początkiem drogi sportowej dziecka,
                        w której znajdzie mnóstwo zabawy. Skrzaty w naszym klubie mają dwie jednostki trenigowe w tygodniu.
                        Wszystkie zespoły objęte są certyfikatem szkolenia dzieci wydanego przez PZPN,
                        więc prowadzący zajęcia mają odpowiednie narzędzia do właściwego podejścia do najmłodszych
                        zawodników.
                        Aktualny grafik treningów znajduje się pod tym odnośnikiem: [PDF]
                        Jeśli chcą Państwo zapisać własną pociechę,
                        proszę przejść do zakładki "Jak się zapisać" i skontaktować się z odpowiednim Trenerem!'
        ],

        [
            'id'    => 'young',
            'name' => 'Żaki',
            'img_path' => 'storage/galeria/2.jpg',
            'lead' => '
                                Grupa żaków to dzieci do 9. roku życia (U9),
                    która może być kontynuacją szkolenia w grupie skrzatów,
                    a także początkiem sportowej ścieżki.
                    Dzieci poznają kolejne środki treningowe,
                    które pozwolą na rozwijanie sportowego potencjału dziecka.
                    Żaki w naszym klubie mają trzy jednostki treningowe w tygodniu.
                    Wszystkie zespoły objęte są certyfikatem szkolenia dzieci wydanego przez PZPN,
                    więc prowadzący zajęcia mają odpowiednie narzędzia do właściwego podejścia do najmłodszych
                    zawodników
                    Aktualny grafik treningów znajduje się pod tym odnośnikiem: [PDF]
                    Jeśli chcą Państwo zapisać własną pociechę,
                    proszę przejść do zakładki "Jak się zapisać" i skontaktować się z odpowiednim Trenerem!
                        '
        ],

        [
            'id'    => 'mid',
            'name' => 'Orlik',
            'img_path' => 'storage/galeria/3.jpg',
            'lead' => '                     Grupa orlików to dzieci do 11. roku życia (U11),
                    która jest kolejnym etapem na piłkarskim szlaku.
                    Dzieci z tej grupy często uczestniczą w licznych turniejach oraz meczach sparingowych.
                    Orliki w naszym klubie mają trzy jednostki treningowe w tygodniu.
                    Wszystkie zespoły objęte są certyfikatem szkolenia dzieci wydanego przez PZPN,
                    więc prowadzący zajęcia mają odpowiednie narzędzia do właściwego podejścia do najmłodszych
                    zawodników.
                    Aktualny grafik treningów znajduje się pod tym odnośnikiem: [PDF]
                    Jeśli chcą Państwo zapisać własną pociechę, proszę przejść do zakładki "Jak się zapisać"
                    i skontaktować się z odpowiednim Trenerem!'
        ],

        [
            'id'    => 'old',
            'name' => 'Młodzik',
            'img_path' => 'storage/galeria/4.jpg',
            'lead' => '                    Grupa młodzików to dzieci do 13. roku życia (U13),
                    która już poznane umiejętności z poprzednich etapów szkolenia może prezentować na boiskach ligowych
                    w lidze młodzika organizowanej przez Wojewódzki Związek Piłki Nożnej.
                    Młodziki w naszym klubie mają trzy jednostki treningowe w tygodniu.
                    Wszystkie zespoły objęte są certyfikatem szkolenia dzieci wydanego przez PZPN,
                    więc prowadzący zajęcia mają odpowiednie narzędzia do właściwego podejścia do najmłodszych
                    zawodników.
                    Aktualny grafik treningów znajduje się pod tym odnośnikiem: [PDF]
                    Jeśli chcą Państwo zapisać własną pociechę, proszę przejść do zakładki "Jak się zapisać"
                    i skontaktować się z odpowiednim Trenerem!'
        ],


    ];
}
