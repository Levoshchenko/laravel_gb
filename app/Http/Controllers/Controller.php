<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function getNews(): array
    {
        return [
            'Спорт' => [
                [
                    'title' => 'dui ut ornare lectus',
                    'description' => 'vitae sapien pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas sed tempus urna et pharetra pharetra massa massa ultricies mi',
                    'short_description' => 'dui id ornare arcu odio ut sem nulla'
                ],
                [
                    'title' => 'facilisi cras fermentum odio',
                    'description' => 'id neque aliquam vestibulum morbi blandit cursus risus at ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus et magnis',
                    'short_description' => 'feugiat pretium nibh ipsum consequat nisl vel pretium'
                ],
                [
                    'title' => 'pretium fusce id velit',
                    'description' => 'vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies',
                    'short_description' => 'tortor aliquam nulla facilisi cras fermentum odio eu'
                ],
                [
                    'title' => 'convallis a cras semper',
                    'description' => 'ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at',
                    'short_description' => 'commodo sed egestas egestas fringilla phasellus faucibus scelerisque'
                ]

            ],
            'Игры' => [
                [
                    'title' => 'ultricies lacus sed turpis',
                    'description' => 'ornare massa eget egestas purus viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor eu augue ut lectus arcu bibendum at varius vel pharetra',
                    'short_description' => 'adipiscing elit ut aliquam purus sit amet luctus'
                ],
                [
                    'title' => 'habitasse platea dictumst quisque',
                    'description' => 'sit amet venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla ut morbi tincidunt augue interdum velit euismod in pellentesque massa placerat',
                    'short_description' => 'eget nunc scelerisque viverra mauris in aliquam sem'
                ],
                [
                    'title' => 'donec adipiscing tristique risus',
                    'description' => 'ac placerat vestibulum lectus mauris ultrices eros in cursus turpis massa tincidunt dui ut ornare lectus sit amet est placerat in egestas erat imperdiet sed',
                    'short_description' => 'commodo viverra maecenas accumsan lacus vel facilisis volutpat'
                ],
                [
                    'title' => 'risus nec feugiat in',
                    'description' => 'vestibulum morbi blandit cursus risus at ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus et magnis dis parturient montes',
                    'short_description' => 'vitae tortor condimentum lacinia quis vel eros donec'
                ]
            ],
            'Фильмы' => [
                [
                    'title' => 'justo eget magna fermentum',
                    'description' => 'orci phasellus egestas tellus rutrum tellus pellentesque eu tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat pretium nibh ipsum consequat nisl vel pretium',
                    'short_description' => 'urna porttitor rhoncus dolor purus non enim praesent'
                ],
                [
                    'title' => 'accumsan sit amet nulla',
                    'description' => 'id diam vel quam elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor sit amet consectetur adipiscing elit duis tristique sollicitudin',
                    'short_description' => 'nisl vel pretium lectus quam id leo in'
                ],
                [
                    'title' => 'at urna condimentum mattis',
                    'description' => 'tortor at risus viverra adipiscing at in tellus integer feugiat scelerisque varius morbi enim nunc faucibus a pellentesque sit amet porttitor eget dolor morbi non',
                    'short_description' => 'nibh tortor id aliquet lectus proin nibh nisl'
                ],
                [
                    'title' => 'congue quisque egestas diam',
                    'description' => 'posuere ac ut consequat semper viverra nam libero justo laoreet sit amet cursus sit amet dictum sit amet justo donec enim diam vulputate ut pharetra',
                    'short_description' => 'maecenas pharetra convallis posuere morbi leo urna molestie'
                ]
            ],
            'Наука' => [
                [
                    'title' => 'eu feugiat pretium nibh',
                    'description' => 'arcu dictum varius duis at consectetur lorem donec massa sapien faucibus et molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt',
                    'short_description' => 'ornare suspendisse sed nisi lacus sed viverra tellus'
                ],
                [
                    'title' => 'imperdiet dui accumsan sit',
                    'description' => 'pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor elit sed vulputate mi sit amet mauris commodo quis imperdiet massa tincidunt',
                    'short_description' => 'ullamcorper malesuada proin libero nunc consequat interdum varius'
                ],
                [
                    'title' => 'pretium viverra suspendisse potenti',
                    'description' => 'facilisis volutpat est velit egestas dui id ornare arcu odio ut sem nulla pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies integer quis',
                    'short_description' => 'accumsan tortor posuere ac ut consequat semper viverra'
                ],
                [
                    'title' => 'tellus at urna condimentum',
                    'description' => 'imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies leo integer malesuada',
                    'short_description' => 'enim lobortis scelerisque fermentum dui faucibus in ornare'
                ]
            ],
            'Культура' => [
                [
                    'title' => 'commodo odio aenean sed',
                    'description' => 'dolor sit amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas integer eget aliquet nibh praesent tristique',
                    'short_description' => 'praesent tristique magna sit amet purus gravida quis'
                ],
                [
                    'title' => 'sem fringilla ut morbi',
                    'description' => 'iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus',
                    'short_description' => 'eget dolor morbi non arcu risus quis varius'
                ],
                [
                    'title' => 'sagittis orci a scelerisque',
                    'description' => 'aenean pharetra magna ac placerat vestibulum lectus mauris ultrices eros in cursus turpis massa tincidunt dui ut ornare lectus sit amet est placerat in egestas',
                    'short_description' => 'sit amet consectetur adipiscing elit duis tristique sollicitudin'
                ],
                [
                    'title' => 'habitant morbi tristique senectus',
                    'description' => 'pharetra convallis posuere morbi leo urna molestie at elementum eu facilisis sed odio morbi quis commodo odio aenean sed adipiscing diam donec adipiscing tristique risus',
                    'short_description' => 'id aliquet lectus proin nibh nisl condimentum id'
                ]
            ]
        ];
    }
}
