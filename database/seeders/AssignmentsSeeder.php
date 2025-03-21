<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Blocks\Assignment;
use Illuminate\Database\Seeder;

class AssignmentsSeeder extends Seeder
{
    /**
     * Municipality and "syndic" columns are false if the registration is for the owner of the block in question.
     *
     * Municipality y "syndic" son falsos si el registro es para el propietario del bloque en cuestión.-
     * En otras palabras, si es verdadero o tiene un valor, entonces el registro es para la coalición.
     *
     * Si se coloca un cero en regidurías a manera de lista [0], entonces no le corresponde ninguna posición.
     */
    public function run(): void
    {
        $assignments = [
            ['block_id' => 1, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 2, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 3, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 4, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 5, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 6, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 7, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 8, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 9, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 10, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 11, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 12, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 13, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 14, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 15, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 16, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 17, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 18, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 19, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 20, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 21, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 22, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 23, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 24, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 25, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 26, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 27, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 28, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 29, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 30, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 31, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 32, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 33, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 34, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 35, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 36, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 37, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 38, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 39, 'municipality' => true, 'syndic' => true, 'councils' => null],

            ['block_id' => 40, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 7]], // MORENA
            ['block_id' => 41, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 5, 6, 7]], // MORENA
            ['block_id' => 42, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 5, 6, 7, 8, 9]], // MORENA
            ['block_id' => 43, 'municipality' => false, 'syndic' => false, 'councils' => [1, 2, 3, 7]], // MORENA
            ['block_id' => 44, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 6, 7]], // MORENA
            ['block_id' => 45, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 6, 7, 8, 9]], // MORENA
            ['block_id' => 46, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 7, 8, 9]], // MORENA
            ['block_id' => 47, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 4, 5, 6, 7]], // MORENA
            ['block_id' => 48, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 7, 8, 9]], // MORENA
            ['block_id' => 49, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 7]], // MORENA
            ['block_id' => 50, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 7]], // MORENA
            ['block_id' => 51, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 7]], // MORENA
            ['block_id' => 52, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 5, 7, 8, 9]], // MORENA
            ['block_id' => 53, 'municipality' => false, 'syndic' => false, 'councils' => [1, 2, 3, 7]], // MORENA
            ['block_id' => 54, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 6, 7]], // MORENA
            ['block_id' => 55, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 5, 8, 11, 12, 13, 14, 15]], // MORENA
            ['block_id' => 56, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 5, 9, 10, 11, 12, 13, 14, 15]], // MORENA
            ['block_id' => 57, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 7]], // MORENA
            ['block_id' => 58, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 5, 7]], // MORENA
            ['block_id' => 59, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 6, 7]], // MORENA
            ['block_id' => 60, 'municipality' => false, 'syndic' => false, 'councils' => [1, 2, 5, 8, 9]], // MORENA
            ['block_id' => 61, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 7, 8, 9]], // MORENA
            ['block_id' => 62, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 5, 7]], // MORENA
            ['block_id' => 63, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 7]], // MORENA
            ['block_id' => 64, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 7, 8, 9]], // MORENA
            ['block_id' => 65, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 6, 7]], // MORENA
            ['block_id' => 66, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 6, 7]], // MORENA
            ['block_id' => 67, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 5, 7]], // MORENA
            ['block_id' => 68, 'municipality' => false, 'syndic' => false, 'councils' => [1, 3, 5, 6, 8]], // MORENA
            ['block_id' => 69, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 7]], // MORENA
            ['block_id' => 70, 'municipality' => true, 'syndic' => true, 'councils' => [1, 3, 4, 6, 7, 10, 11, 13, 15, 16, 17]], // MORENA
            ['block_id' => 71, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 7, 8, 9]], // MORENA
            ['block_id' => 72, 'municipality' => false, 'syndic' => false, 'councils' => [1, 4, 5, 6]], // MORENA
            ['block_id' => 73, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 5, 6]], // MORENA
            ['block_id' => 74, 'municipality' => false, 'syndic' => false, 'councils' => [2, 3, 5, 8]], // MORENA
            ['block_id' => 75, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 7]], // MORENA
            ['block_id' => 76, 'municipality' => false, 'syndic' => false, 'councils' => [1, 5, 6]], // MORENA
            ['block_id' => 77, 'municipality' => true, 'syndic' => true, 'councils' => [1, 4, 5, 7]], // MORENA
            ['block_id' => 78, 'municipality' => false, 'syndic' => false, 'councils' => [1, 2, 3, 7]], // MORENA

            ['block_id' => 79, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 80, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 5, 6, 7]], // PAN - Indé
            ['block_id' => 81, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 82, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 83, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 84, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 85, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 86, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 87, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 88, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 89, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 90, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 5, 6, 7]], // PAN - Ocampo
            ['block_id' => 91, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 92, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 93, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 94, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 95, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 96, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 97, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 98, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 99, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 100, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 5, 6, 7, 8, 9]], // PAN - Guadalupe Victoria
            ['block_id' => 101, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 102, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 103, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 104, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 105, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 106, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 107, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 108, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 109, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 5, 6, 7]], // PAN - Guanaceví
            ['block_id' => 110, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 111, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 112, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 113, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 114, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 115, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 116, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PAN
            ['block_id' => 117, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 5, 6, 7]], // PAN - Hidalgo

            ['block_id' => 118, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 5, 6, 7]], // PRI - Guanaceví
            ['block_id' => 119, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 120, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 121, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 122, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 123, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 124, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 125, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 126, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 127, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 128, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 5, 6, 7]], // PRI - Ocampo
            ['block_id' => 129, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 5, 6, 7]], // PRI - Hidalgo
            ['block_id' => 130, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 131, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 132, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 133, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 134, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 135, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 136, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 5, 6, 7]], // PRI - Indé
            ['block_id' => 137, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 138, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 139, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 140, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 141, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 142, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 5, 6, 7, 8, 9]], // PRI - Guadalupe Victoria
            ['block_id' => 143, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 144, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 145, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 146, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 147, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 148, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 149, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 150, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 151, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 152, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 153, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 154, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 155, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI
            ['block_id' => 156, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PRI

            ['block_id' => 157, 'municipality' => true, 'syndic' => true, 'councils' => [2, 3, 8, 9]], // PT
            ['block_id' => 158, 'municipality' => false, 'syndic' => false, 'councils' => [3, 6, 7]], // PT
            ['block_id' => 159, 'municipality' => true, 'syndic' => true, 'councils' => [4, 5, 6]], // PT
            ['block_id' => 160, 'municipality' => false, 'syndic' => false, 'councils' => [2, 5, 9, 12, 14]], // PT
            ['block_id' => 161, 'municipality' => true, 'syndic' => true, 'councils' => [4, 5]], // PT
            ['block_id' => 162, 'municipality' => false, 'syndic' => false, 'councils' => [4, 5]], // PT
            ['block_id' => 163, 'municipality' => false, 'syndic' => false, 'councils' => [4, 6]], // PT
            ['block_id' => 164, 'municipality' => false, 'syndic' => false, 'councils' => [7]], // PT
            ['block_id' => 165, 'municipality' => false, 'syndic' => false, 'councils' => [8]], // PT
            ['block_id' => 166, 'municipality' => false, 'syndic' => false, 'councils' => [5]], // PT
            ['block_id' => 167, 'municipality' => false, 'syndic' => false, 'councils' => [5]], // PT
            ['block_id' => 168, 'municipality' => false, 'syndic' => false, 'councils' => [5]], // PT
            ['block_id' => 169, 'municipality' => true, 'syndic' => true, 'councils' => [4, 5]], // PT
            ['block_id' => 170, 'municipality' => false, 'syndic' => false, 'councils' => [5, 6]], // PT
            ['block_id' => 171, 'municipality' => false, 'syndic' => false, 'councils' => [7]], // PT
            ['block_id' => 172, 'municipality' => false, 'syndic' => false, 'councils' => [6]], // PT
            ['block_id' => 173, 'municipality' => false, 'syndic' => false, 'councils' => [5]], // PT
            ['block_id' => 174, 'municipality' => false, 'syndic' => false, 'councils' => [7, 10]], // PT
            ['block_id' => 175, 'municipality' => false, 'syndic' => false, 'councils' => [5]], // PT
            ['block_id' => 176, 'municipality' => false, 'syndic' => false, 'councils' => [5]], // PT
            ['block_id' => 177, 'municipality' => false, 'syndic' => false, 'councils' => [5, 6]], // PT
            ['block_id' => 178, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 5, 6, 7]], // PT
            ['block_id' => 179, 'municipality' => false, 'syndic' => false, 'councils' => [6]], // PT
            ['block_id' => 180, 'municipality' => false, 'syndic' => false, 'councils' => [5]], // PT
            ['block_id' => 181, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PT
            ['block_id' => 182, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PT
            ['block_id' => 183, 'municipality' => false, 'syndic' => false, 'councils' => [5]], // PT
            ['block_id' => 184, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PT
            ['block_id' => 185, 'municipality' => false, 'syndic' => false, 'councils' => [5]], // PT
            ['block_id' => 186, 'municipality' => false, 'syndic' => false, 'councils' => [5]], // PT
            ['block_id' => 187, 'municipality' => false, 'syndic' => false, 'councils' => [6]], // PT
            ['block_id' => 188, 'municipality' => false, 'syndic' => false, 'councils' => [5]], // PT
            ['block_id' => 189, 'municipality' => false, 'syndic' => false, 'councils' => [5]], // PT
            ['block_id' => 190, 'municipality' => false, 'syndic' => false, 'councils' => [6]], // PT
            ['block_id' => 191, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PT
            ['block_id' => 192, 'municipality' => false, 'syndic' => false, 'councils' => [6]], // PT
            ['block_id' => 193, 'municipality' => false, 'syndic' => false, 'councils' => [6]], // PT
            ['block_id' => 194, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 5, 6, 7, 8, 9]], // PT
            ['block_id' => 195, 'municipality' => false, 'syndic' => false, 'councils' => [6]], // PT

            ['block_id' => 196, 'municipality' => true, 'syndic' => true, 'councils' => [2, 3, 4, 7, 9]], // PVEM
            ['block_id' => 197, 'municipality' => true, 'syndic' => true, 'councils' => [1, 4, 6, 9]], // PVEM
            ['block_id' => 198, 'municipality' => false, 'syndic' => false, 'councils' => [2, 3, 8, 9]], // PVEM
            ['block_id' => 199, 'municipality' => true, 'syndic' => true, 'councils' => [2, 4, 9]], // PVEM
            ['block_id' => 200, 'municipality' => false, 'syndic' => false, 'councils' => [3]], // PVEM
            ['block_id' => 201, 'municipality' => false, 'syndic' => false, 'councils' => [3, 4]], // PVEM
            ['block_id' => 202, 'municipality' => false, 'syndic' => false, 'councils' => [7]], // PVEM
            ['block_id' => 203, 'municipality' => true, 'syndic' => true, 'councils' => [4]], // PVEM
            ['block_id' => 204, 'municipality' => false, 'syndic' => false, 'councils' => [4, 6]], // PVEM
            ['block_id' => 205, 'municipality' => false, 'syndic' => false, 'councils' => [6, 9]], // PVEM
            ['block_id' => 206, 'municipality' => false, 'syndic' => false, 'councils' => [6]], // PVEM
            ['block_id' => 207, 'municipality' => false, 'syndic' => false, 'councils' => [6]], // PVEM
            ['block_id' => 208, 'municipality' => false, 'syndic' => false, 'councils' => [5]], // PVEM
            ['block_id' => 209, 'municipality' => false, 'syndic' => false, 'councils' => [5]], // PVEM
            ['block_id' => 210, 'municipality' => false, 'syndic' => false, 'councils' => [4]], // PVEM
            ['block_id' => 211, 'municipality' => false, 'syndic' => false, 'councils' => [6]], // PVEM
            ['block_id' => 212, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PVEM
            ['block_id' => 213, 'municipality' => false, 'syndic' => false, 'councils' => [7]], // PVEM
            ['block_id' => 214, 'municipality' => false, 'syndic' => false, 'councils' => [6]], // PVEM
            ['block_id' => 215, 'municipality' => false, 'syndic' => false, 'councils' => [7, 8]], // PVEM
            ['block_id' => 216, 'municipality' => false, 'syndic' => false, 'councils' => [8]], // PVEM
            ['block_id' => 217, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 5, 6]], // PVEM
            ['block_id' => 218, 'municipality' => false, 'syndic' => false, 'councils' => [5]], // PVEM
            ['block_id' => 219, 'municipality' => false, 'syndic' => false, 'councils' => [6]], // PVEM
            ['block_id' => 220, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PVEM
            ['block_id' => 221, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PVEM
            ['block_id' => 222, 'municipality' => false, 'syndic' => false, 'councils' => [5]], // PVEM
            ['block_id' => 223, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PVEM
            ['block_id' => 224, 'municipality' => false, 'syndic' => false, 'councils' => [6]], // PVEM
            ['block_id' => 225, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PVEM
            ['block_id' => 226, 'municipality' => false, 'syndic' => false, 'councils' => [6]], // PVEM
            ['block_id' => 227, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PVEM
            ['block_id' => 228, 'municipality' => false, 'syndic' => false, 'councils' => [6]], // PVEM
            ['block_id' => 229, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PVEM
            ['block_id' => 230, 'municipality' => false, 'syndic' => false, 'councils' => [6]], // PVEM
            ['block_id' => 231, 'municipality' => false, 'syndic' => false, 'councils' => [6]], // PVEM
            ['block_id' => 232, 'municipality' => true, 'syndic' => true, 'councils' => [1, 2, 3, 4, 5, 6, 7, 8, 9]], // PVEM
            ['block_id' => 233, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PVEM
            ['block_id' => 234, 'municipality' => false, 'syndic' => false, 'councils' => [0]], // PVEM

            ['block_id' => 235, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 236, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 237, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 238, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 239, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 240, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 241, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 242, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 243, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 244, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 245, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 246, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 247, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 248, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 249, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 250, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 251, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 252, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 253, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 254, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 255, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 256, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 257, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 258, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 259, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 260, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 261, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 262, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 263, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 264, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 265, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 266, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 267, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 268, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 269, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 270, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 271, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 272, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 273, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 274, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 275, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 276, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 277, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 278, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 279, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 280, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 281, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 282, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 283, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 284, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 285, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 286, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 287, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 288, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 289, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 290, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 291, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 292, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 293, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 294, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 295, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 296, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 297, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 298, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 299, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 300, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 301, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 302, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 303, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 304, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 305, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 306, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 307, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 308, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 309, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 310, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 311, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 312, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 313, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 314, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 315, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 316, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 317, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 318, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 319, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 320, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 321, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 322, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 323, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 324, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 325, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 326, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 327, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 328, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 329, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 330, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 331, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 332, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 333, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 334, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 335, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 336, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 337, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 338, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 339, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 340, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 341, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 342, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 343, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 344, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 345, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 346, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 347, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 348, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 349, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 350, 'municipality' => true, 'syndic' => true, 'councils' => null],
            ['block_id' => 351, 'municipality' => true, 'syndic' => true, 'councils' => null],
        ];

        foreach ($assignments as $assignment) {
            Assignment::create($assignment);
        }
    }
}
