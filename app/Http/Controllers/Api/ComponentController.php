<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class ComponentController extends Controller
{
    public function fullcalendarStaticApi(): JsonResponse
    {
        return response()->json([
            [
                'title' => 'Event json API 1',
                'start' => '2023-01-01',
                'end' => '2023-01-02',
                'color' => fake()->hexColor()
            ],
            [
                'title' => 'Event json API 2',
                'start' => '2023-01-05',
                'end' => '2023-01-06',
                'color' => fake()->hexColor()
            ],
            [
                'title' => 'Event json API 3',
                'start' => '2023-01-10',
                'end' => '2023-01-12',
                'color' => fake()->hexColor()
            ],
            [
                'title' => 'Event json API 4',
                'start' => '2023-01-15',
                'end' => '2023-01-16',
                'color' => fake()->hexColor()
            ],
            [
                'title' => 'Event json API 5',
                'start' => '2023-01-20',
                'end' => '2023-01-22',
                'color' => fake()->hexColor()
            ],
            [
                'title' => 'Event json API 6',
                'start' => '2023-01-25',
                'end' => '2023-01-26',
                'color' => fake()->hexColor()
            ],
            [
                'title' => 'Event json API 7',
                'start' => '2023-01-30',
                'end' => '2023-01-31',
                'color' => fake()->hexColor()
            ],
            [
                'title' => 'Event json API 8',
                'start' => '2023-02-01',
                'end' => '2023-02-02',
                'color' => fake()->hexColor()
            ],
            [
                'title' => 'Event json API 9',
                'start' => '2023-02-05',
                'end' => '2023-02-06',
                'color' => fake()->hexColor()
            ],
            [
                'title' => 'Event json API 10',
                'start' => '2023-02-10',
                'end' => '2023-02-12',
                'color' => fake()->hexColor()
            ],
            [
                'title' => 'Event json API 11',
                'start' => '2023-02-15 15:30:00',
                'color' => fake()->hexColor(),
                'editable' => false
            ],
            [
                'title' => 'Event json API 12',
                'start' => '2023-02-19 15:30:00',
                'color' => fake()->hexColor(),
                'editable' => false
            ]
        ]);
    }

    public function fullcalendarDinamicApi(): JsonResponse
    {
        return response()->json(User::all()->map(fn($user) => [
            'title' => $user->name,
            'start' => $user->created_at->toDateString(),
            'color' => '#' . Str::padLeft(dechex(crc32($user->id)), 6, '0'),
            'editable' => rand(0, 1) ? true : false,
            'email' => $user->email, // dado extra se precisar no evento
            // 'start' => $user->created_at->format('Y-m-d'),
            // 'end'   => $user->updated_at->format('Y-m-d'),
            // 'color' => fake()->hexColor(),
        ]));
    }

    public function chartStaticApi1()
    {
        return response()->json([
            'labels' => ['Janeiro', 'Fevereiro', 'Março'],
            'datasets' => [
                [
                    'label' => 'Vendas',
                    'data' => [150, 200, 180],
                    'borderColor' => '#36A2EB',
                    'backgroundColor' => 'rgba(54,162,235,0.2)',
                ]
            ]
        ]);
    }

    public function chartStaticApi2()
    {
        return response()->json([
            'labels' => ['Chrome', 'Firefox', 'Safari'],
            'datasets' => [
                [
                    'data' => [65, 20, 15],
                    'backgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56'],
                ]
            ]
        ]);
    }

    public function chartDinamic(): JsonResponse
    {
        // Com conexão SQLite
        $query = User::query()
            ->selectRaw("strftime('%Y-%m', created_at) as month, COUNT(*) as total")
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        //// Com conexão MySQL
        // $query = User::query()
        //     ->selectRaw("DATE_FORMAT(created_at, '%Y-%m') as month, COUNT(*) as total")
        //     ->groupBy('month')
        //     ->orderBy('month')
        //     ->get();

        // Montar labels e dados
        $labels = $query->map(
            fn($row) => Carbon::parse("{$row->month}-01")->translatedFormat('F Y')
        );

        $data = $query->pluck('total');

        return response()->json([
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Novos usuários',
                    'data' => $data,
                    'borderColor' => '#36A2EB',
                    'backgroundColor' => '#36A2EB33',
                ]
            ],
        ]);
    }
}