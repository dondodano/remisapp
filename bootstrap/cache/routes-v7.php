<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u7axYfMP2FH9mfPv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z4Qq6H6Ox96wGI3J',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/broadcasting/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ooA2ZNsJw9COxtvD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8eiGMcJ7D0ItQytN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'login.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'guest',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gsYBLD7QFv6gHt5t',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J2Lfa0XqepIXBL5W',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qgqtPmoYX5yUbHld',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tPNp0RBVXMejuvc8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/activity-log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nHLpU40pXqC0Bx6Q',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/institute' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nXrgJjI6XnE6v9i3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/institute/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ix24rVDfykRWsIwl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/program' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::63pOJUGRblc95H5E',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/program/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6tuePgcz8SJPY6JW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/system-backup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D5RNsam0TwtuHHHG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/system-backup/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s6aBxvs1pDlY7Em9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/database-backup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mKEuA612lK1E0rDV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/database-backup/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ljtVTD6zIgNwZHvZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/general' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cn56wUTUph7xDA84',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/general/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BejBrcUrs7bCcwiN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/favicon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nNAZn3ZRQsFDl5AR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/favicon/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZQ8MmgouXux8w0fy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/maintenance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gYSPTmSXah3Dhw89',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/maintenance/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jkC9jCXvwmmxHXv2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6q8supQkS18jGDgR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pdVm1QpQxrDqTMp0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NBKu0DWGgtvEUTaH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iilCVOb8fOruH9iI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/research' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VZbrHxibq9D61YkD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/research/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nNmbSZhV6gW8HRdE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/publication' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DNTexI46tjBOIJlX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/publication/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gjRRtyVSyRSXHZP1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/presentation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sqmfUe3ChJvx7lKO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/presentation/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eK63rHRTfkTdQoAz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/extension' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6VO4tF4JyRapzqNZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/extension/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dJP65FjnVf0YEat1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/training' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UUdIJsyleNEdSd9i',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/training/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GPFH3biwi8HktghP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partnership' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z13YrEKUuzs4dNlm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partnership/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fjaXagbbukG4Ph89',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/symlink' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pVffJVk6CyRgUegd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/phpinfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5428QSK3tNfwYUvQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pheBPHys0nELRrTF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/optimize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jRPLL52QGYwgnq7m',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/migrate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t9aWtVqF8tKFAov1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mQPb5AnDFHbzv7hT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V8rUL5ExN0ozL274',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file/undo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::troaffO0aAfN0XNd',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AoO6HsNToe9paJL5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/livewire/message/([^/]++)(*:107)|/([^/]++)/livewire/message/([^/]++)(*:150)|/livewire/preview\\-file/([^/]++)(*:190)|/auth/([^/]++)(*:212)|/change\\-password/([^/]++)(?|(*:249))|/user/edit/([^/]++)(*:277)|/institute/edit/([^/]++)(*:309)|/p(?|r(?|ogram/edit/([^/]++)(*:345)|esentation/(?|e(?|dit/([^/]++)(*:383)|valuation/([^/]++)(*:409))|preview/([^/]++)(*:434)))|ublication/(?|e(?|dit/([^/]++)(*:474)|valuation/([^/]++)(*:500))|preview/([^/]++)(*:525))|artnership/(?|e(?|dit/([^/]++)(*:564)|valuation/([^/]++)(*:590))|preview/([^/]++)(*:615)))|/system\\-backup/d(?|ownload/([^/]++)(*:661)|elete/([^/]++)(*:683))|/database\\-backup/d(?|ownload/([^/]++)(*:730)|elete/([^/]++)(*:752))|/research/(?|e(?|dit/([^/]++)(*:790)|valuation/([^/]++)(*:816))|preview/([^/]++)(*:841))|/extension/(?|e(?|dit/([^/]++)(*:880)|valuation/([^/]++)(*:906))|preview/([^/]++)(*:931))|/training/(?|e(?|dit/([^/]++)(*:969)|valuation/([^/]++)(*:995))|preview/([^/]++)(*:1020)))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      107 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      150 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message-localized',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      190 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      212 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7sXu92R9er24mAp7',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      249 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::piCGwMMpsqa5wBc8',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2g7LvOCGhvGajlR6',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      277 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gnvaxA93QnwHsCM0',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O61WkPaG6GkcwPM0',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      345 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hGJsM3jWjaVwaM7M',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      383 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EcAvunnRmSmJeLrM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      409 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ccy39NoF9llapMgi',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      434 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kaVdV6uUpYLW2tO5',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      474 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::apkgwObUreJqTAsn',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      500 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EHfxfzkUIcsL2kbj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      525 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KGq5hFJdqi60D7ZX',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QKEcqGRcVbOywEj8',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      590 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N9Gsc7o4G2bxYoQ8',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      615 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zdq23ScymwqHGW4s',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      661 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SIzAASxxO5Ws08j0',
          ),
          1 => 
          array (
            0 => 'file',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      683 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GQmDrVeSRUOsq8Vd',
          ),
          1 => 
          array (
            0 => 'file',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      730 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2GhFnIWfdBdwdRuD',
          ),
          1 => 
          array (
            0 => 'file',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      752 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4hilNKXSy3COZDk4',
          ),
          1 => 
          array (
            0 => 'file',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      790 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ss2oF7GtjeVTdvDO',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      816 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oIqxM6VTTfTBiFbn',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      841 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::G5c4dHOOjK7z7rcR',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      880 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aROryc8v7Oiqz1hB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      906 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5uowMUA2hO81VzeT',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      931 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wAIrjw2N8a0nnBB9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      969 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IjsfUGMznnDI4qbI',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      995 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mWkYSnZXiOeUYIwD',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1020 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0xnmKkGyQZYYs8Y9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message-localized' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message-localized',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'controller' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'as' => 'livewire.upload-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'controller' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'as' => 'livewire.preview-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u7axYfMP2FH9mfPv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'as' => 'generated::u7axYfMP2FH9mfPv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z4Qq6H6Ox96wGI3J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'as' => 'generated::Z4Qq6H6Ox96wGI3J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ooA2ZNsJw9COxtvD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'broadcasting/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'controller' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
        ),
        'as' => 'generated::ooA2ZNsJw9COxtvD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8eiGMcJ7D0ItQytN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:259:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:41:"function(){ return \\redirect(\'/login\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000019f4c3ce000000004aa4e291";}";s:4:"hash";s:44:"8pINbcxVKeMRqWHElZMIzYkm16QKNGO5uhWQJhKGqic=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8eiGMcJ7D0ItQytN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthController@index',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthController@signin',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthController@signin',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'guest' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthController@signout',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthController@signout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'guest',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7sXu92R9er24mAp7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserAuthorizationController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserAuthorizationController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7sXu92R9er24mAp7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::piCGwMMpsqa5wBc8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'change-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\FirstAccessChangePasswordController@index',
        'controller' => 'App\\Http\\Controllers\\User\\FirstAccessChangePasswordController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::piCGwMMpsqa5wBc8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2g7LvOCGhvGajlR6' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'change-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\FirstAccessChangePasswordController@update',
        'controller' => 'App\\Http\\Controllers\\User\\FirstAccessChangePasswordController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2g7LvOCGhvGajlR6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gsYBLD7QFv6gHt5t' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Dashboard\\Index@__invoke',
        'controller' => 'App\\Http\\Livewire\\Dashboard\\Index',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::gsYBLD7QFv6gHt5t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J2Lfa0XqepIXBL5W' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super, can:is_admin',
        ),
        'uses' => 'App\\Http\\Livewire\\User\\Index@__invoke',
        'controller' => 'App\\Http\\Livewire\\User\\Index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::J2Lfa0XqepIXBL5W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qgqtPmoYX5yUbHld' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super, can:is_admin',
        ),
        'uses' => 'App\\Http\\Livewire\\User\\Create@__invoke',
        'controller' => 'App\\Http\\Livewire\\User\\Create',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::qgqtPmoYX5yUbHld',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gnvaxA93QnwHsCM0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super, can:is_admin',
        ),
        'uses' => 'App\\Http\\Livewire\\User\\Edit@__invoke',
        'controller' => 'App\\Http\\Livewire\\User\\Edit',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::gnvaxA93QnwHsCM0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tPNp0RBVXMejuvc8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super',
        ),
        'uses' => 'App\\Http\\Livewire\\Log\\UserLog@__invoke',
        'controller' => 'App\\Http\\Livewire\\Log\\UserLog',
        'namespace' => NULL,
        'prefix' => '/user-log',
        'where' => 
        array (
        ),
        'as' => 'generated::tPNp0RBVXMejuvc8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nHLpU40pXqC0Bx6Q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'activity-log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super',
        ),
        'uses' => 'App\\Http\\Livewire\\Log\\UserActivityLog@__invoke',
        'controller' => 'App\\Http\\Livewire\\Log\\UserActivityLog',
        'namespace' => NULL,
        'prefix' => '/activity-log',
        'where' => 
        array (
        ),
        'as' => 'generated::nHLpU40pXqC0Bx6Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nXrgJjI6XnE6v9i3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'institute',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super, can:is_admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Requisite\\Institute\\Index@__invoke',
        'controller' => 'App\\Http\\Livewire\\Requisite\\Institute\\Index',
        'namespace' => NULL,
        'prefix' => '/institute',
        'where' => 
        array (
        ),
        'as' => 'generated::nXrgJjI6XnE6v9i3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ix24rVDfykRWsIwl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'institute/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super, can:is_admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Requisite\\Institute\\Create@__invoke',
        'controller' => 'App\\Http\\Livewire\\Requisite\\Institute\\Create',
        'namespace' => NULL,
        'prefix' => '/institute',
        'where' => 
        array (
        ),
        'as' => 'generated::Ix24rVDfykRWsIwl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O61WkPaG6GkcwPM0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'institute/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super, can:is_admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Requisite\\Institute\\Edit@__invoke',
        'controller' => 'App\\Http\\Livewire\\Requisite\\Institute\\Edit',
        'namespace' => NULL,
        'prefix' => '/institute',
        'where' => 
        array (
        ),
        'as' => 'generated::O61WkPaG6GkcwPM0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::63pOJUGRblc95H5E' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'program',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super, can:is_admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Requisite\\Program\\Index@__invoke',
        'controller' => 'App\\Http\\Livewire\\Requisite\\Program\\Index',
        'namespace' => NULL,
        'prefix' => '/program',
        'where' => 
        array (
        ),
        'as' => 'generated::63pOJUGRblc95H5E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6tuePgcz8SJPY6JW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'program/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super, can:is_admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Requisite\\Program\\Create@__invoke',
        'controller' => 'App\\Http\\Livewire\\Requisite\\Program\\Create',
        'namespace' => NULL,
        'prefix' => '/program',
        'where' => 
        array (
        ),
        'as' => 'generated::6tuePgcz8SJPY6JW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hGJsM3jWjaVwaM7M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'program/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super, can:is_admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Requisite\\Program\\Edit@__invoke',
        'controller' => 'App\\Http\\Livewire\\Requisite\\Program\\Edit',
        'namespace' => NULL,
        'prefix' => '/program',
        'where' => 
        array (
        ),
        'as' => 'generated::hGJsM3jWjaVwaM7M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D5RNsam0TwtuHHHG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'system-backup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super',
        ),
        'uses' => 'App\\Http\\Controllers\\Backup\\SystemController@index',
        'controller' => 'App\\Http\\Controllers\\Backup\\SystemController@index',
        'namespace' => NULL,
        'prefix' => '/system-backup',
        'where' => 
        array (
        ),
        'as' => 'generated::D5RNsam0TwtuHHHG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s6aBxvs1pDlY7Em9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'system-backup/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:2087:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1867:"function(\\Illuminate\\Http\\Request $request){
        \\ini_set(\'max_execution_time\', 300);
        \\ini_set(\'memory_limit\', \'256 M\');
        \\ini_set(\'post_max_size\', \'500 M\');
        \\ini_set(\'error_reporting\', E_ALL);



        $parent_dir =  (bool)\\config(\'app.app_deployed\') == false ? \'remisapp/\' :  \'public_html/\' ;

        $path = \\dirname(\'C:\\\\xampp\\\\htdocs\\\\remis-app\\\\remisapp\\\\routes\');

        $zip_file = \'backup-\'. \\time().\'.zip\';
        $zip = new \\ZipArchive();
        if($zip->open($zip_file, \\ZipArchive::CREATE  | \\ZipArchive::OVERWRITE) == TRUE)
        {
            $files = new \\RecursiveIteratorIterator(new \\RecursiveDirectoryIterator($path));
            foreach ($files as $name => $file)
            {
                if (!$file->isDir())
                {
                    $filePath = $file->getRealPath();

                    $relativePath = $parent_dir . \\substr($filePath, \\strlen($path) + 1);

                    $file_extension = new \\SplFileInfo($filePath);
                    if($file_extension->getExtension() != \'zip\')
                    {
                        $zip->addFile($filePath, $relativePath);
                    }
                }
            }
            $zip->close();

            if ($zip->status != \\ZipArchive::ER_OK)
            {
                \\toastr("Failed to generate backup!", "error");
                return \\back();
            }

        }

        if((bool)\\config(\'app.app_deployed\') == true)
        {
            $path = \\dirname(\'C:\\\\xampp\\\\htdocs\\\\remis-app\\\\remisapp\\\\routes\');

            \\copy( $path .\'/\'. $zip_file ,  \\public_path() . \'/storage/backups/\' . $zip_file);
            \\unlink($path .\'/\'. $zip_file);
        }else{
            \\moveFile($zip_file );
        }

        \\toastr("System backup successfully created!", "success");
        return \\back();
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000019f4c3e5000000004aa4e291";}";s:4:"hash";s:44:"cTintW0/XgUqGLOq4txqSgAn+vtHm/0C5oDsmH5j/XY=";}}',
        'namespace' => NULL,
        'prefix' => '/system-backup',
        'where' => 
        array (
        ),
        'as' => 'generated::s6aBxvs1pDlY7Em9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SIzAASxxO5Ws08j0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'system-backup/download/{file}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super',
        ),
        'uses' => 'App\\Http\\Controllers\\Backup\\SystemController@download',
        'controller' => 'App\\Http\\Controllers\\Backup\\SystemController@download',
        'namespace' => NULL,
        'prefix' => '/system-backup',
        'where' => 
        array (
        ),
        'as' => 'generated::SIzAASxxO5Ws08j0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GQmDrVeSRUOsq8Vd' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'system-backup/delete/{file}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super',
        ),
        'uses' => 'App\\Http\\Controllers\\Backup\\SystemController@delete',
        'controller' => 'App\\Http\\Controllers\\Backup\\SystemController@delete',
        'namespace' => NULL,
        'prefix' => '/system-backup',
        'where' => 
        array (
        ),
        'as' => 'generated::GQmDrVeSRUOsq8Vd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mKEuA612lK1E0rDV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'database-backup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super',
        ),
        'uses' => 'App\\Http\\Controllers\\Backup\\DatabaseController@index',
        'controller' => 'App\\Http\\Controllers\\Backup\\DatabaseController@index',
        'namespace' => NULL,
        'prefix' => '/database-backup',
        'where' => 
        array (
        ),
        'as' => 'generated::mKEuA612lK1E0rDV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ljtVTD6zIgNwZHvZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'database-backup/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super',
        ),
        'uses' => 'App\\Http\\Controllers\\Backup\\DatabaseController@create',
        'controller' => 'App\\Http\\Controllers\\Backup\\DatabaseController@create',
        'namespace' => NULL,
        'prefix' => '/database-backup',
        'where' => 
        array (
        ),
        'as' => 'generated::ljtVTD6zIgNwZHvZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2GhFnIWfdBdwdRuD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'database-backup/download/{file}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super',
        ),
        'uses' => 'App\\Http\\Controllers\\Backup\\DatabaseController@download',
        'controller' => 'App\\Http\\Controllers\\Backup\\DatabaseController@download',
        'namespace' => NULL,
        'prefix' => '/database-backup',
        'where' => 
        array (
        ),
        'as' => 'generated::2GhFnIWfdBdwdRuD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4hilNKXSy3COZDk4' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'database-backup/delete/{file}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super',
        ),
        'uses' => 'App\\Http\\Controllers\\Backup\\DatabaseController@delete',
        'controller' => 'App\\Http\\Controllers\\Backup\\DatabaseController@delete',
        'namespace' => NULL,
        'prefix' => '/database-backup',
        'where' => 
        array (
        ),
        'as' => 'generated::4hilNKXSy3COZDk4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cn56wUTUph7xDA84' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super',
        ),
        'uses' => 'App\\Http\\Controllers\\Setting\\GeneralSettingController@index',
        'controller' => 'App\\Http\\Controllers\\Setting\\GeneralSettingController@index',
        'namespace' => NULL,
        'prefix' => '/general',
        'where' => 
        array (
        ),
        'as' => 'generated::cn56wUTUph7xDA84',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BejBrcUrs7bCcwiN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'general/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super',
        ),
        'uses' => 'App\\Http\\Controllers\\Setting\\GeneralSettingController@update',
        'controller' => 'App\\Http\\Controllers\\Setting\\GeneralSettingController@update',
        'namespace' => NULL,
        'prefix' => '/general',
        'where' => 
        array (
        ),
        'as' => 'generated::BejBrcUrs7bCcwiN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nNAZn3ZRQsFDl5AR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'favicon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super',
        ),
        'uses' => 'App\\Http\\Controllers\\Setting\\FaviconController@index',
        'controller' => 'App\\Http\\Controllers\\Setting\\FaviconController@index',
        'namespace' => NULL,
        'prefix' => '/favicon',
        'where' => 
        array (
        ),
        'as' => 'generated::nNAZn3ZRQsFDl5AR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZQ8MmgouXux8w0fy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'favicon/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super',
        ),
        'uses' => 'App\\Http\\Controllers\\Setting\\FaviconController@update',
        'controller' => 'App\\Http\\Controllers\\Setting\\FaviconController@update',
        'namespace' => NULL,
        'prefix' => '/favicon',
        'where' => 
        array (
        ),
        'as' => 'generated::ZQ8MmgouXux8w0fy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gYSPTmSXah3Dhw89' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'maintenance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super',
        ),
        'uses' => 'App\\Http\\Controllers\\Maintenance\\MaintenanceController@index',
        'controller' => 'App\\Http\\Controllers\\Maintenance\\MaintenanceController@index',
        'namespace' => NULL,
        'prefix' => '/maintenance',
        'where' => 
        array (
        ),
        'as' => 'generated::gYSPTmSXah3Dhw89',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jkC9jCXvwmmxHXv2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'maintenance/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:is_super',
        ),
        'uses' => 'App\\Http\\Controllers\\Maintenance\\MaintenanceController@update',
        'controller' => 'App\\Http\\Controllers\\Maintenance\\MaintenanceController@update',
        'namespace' => NULL,
        'prefix' => '/maintenance',
        'where' => 
        array (
        ),
        'as' => 'generated::jkC9jCXvwmmxHXv2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6q8supQkS18jGDgR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'my/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PasswordController@index',
        'controller' => 'App\\Http\\Controllers\\User\\PasswordController@index',
        'namespace' => NULL,
        'prefix' => '/my',
        'where' => 
        array (
        ),
        'as' => 'generated::6q8supQkS18jGDgR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pdVm1QpQxrDqTMp0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'my/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PasswordController@update',
        'controller' => 'App\\Http\\Controllers\\User\\PasswordController@update',
        'namespace' => NULL,
        'prefix' => '/my',
        'where' => 
        array (
        ),
        'as' => 'generated::pdVm1QpQxrDqTMp0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NBKu0DWGgtvEUTaH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'my/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ProfileController@index',
        'controller' => 'App\\Http\\Controllers\\User\\ProfileController@index',
        'namespace' => NULL,
        'prefix' => '/my',
        'where' => 
        array (
        ),
        'as' => 'generated::NBKu0DWGgtvEUTaH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iilCVOb8fOruH9iI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'my/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ProfileController@update',
        'controller' => 'App\\Http\\Controllers\\User\\ProfileController@update',
        'namespace' => NULL,
        'prefix' => '/my',
        'where' => 
        array (
        ),
        'as' => 'generated::iilCVOb8fOruH9iI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VZbrHxibq9D61YkD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'research',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Research\\Index@__invoke',
        'controller' => 'App\\Http\\Livewire\\Research\\Index',
        'namespace' => NULL,
        'prefix' => '/research',
        'where' => 
        array (
        ),
        'as' => 'generated::VZbrHxibq9D61YkD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nNmbSZhV6gW8HRdE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'research/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Research\\Create@__invoke',
        'controller' => 'App\\Http\\Livewire\\Research\\Create',
        'namespace' => NULL,
        'prefix' => '/research',
        'where' => 
        array (
        ),
        'as' => 'generated::nNmbSZhV6gW8HRdE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ss2oF7GtjeVTdvDO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'research/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Research\\Edit@__invoke',
        'controller' => 'App\\Http\\Livewire\\Research\\Edit',
        'namespace' => NULL,
        'prefix' => '/research',
        'where' => 
        array (
        ),
        'as' => 'generated::ss2oF7GtjeVTdvDO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G5c4dHOOjK7z7rcR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'research/preview/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Research\\Preview@__invoke',
        'controller' => 'App\\Http\\Livewire\\Research\\Preview',
        'namespace' => NULL,
        'prefix' => '/research',
        'where' => 
        array (
        ),
        'as' => 'generated::G5c4dHOOjK7z7rcR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oIqxM6VTTfTBiFbn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'research/evaluation/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Research\\Evaluation@__invoke',
        'controller' => 'App\\Http\\Livewire\\Research\\Evaluation',
        'namespace' => NULL,
        'prefix' => '/research',
        'where' => 
        array (
        ),
        'as' => 'generated::oIqxM6VTTfTBiFbn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DNTexI46tjBOIJlX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'publication',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Publication\\Index@__invoke',
        'controller' => 'App\\Http\\Livewire\\Publication\\Index',
        'namespace' => NULL,
        'prefix' => '/publication',
        'where' => 
        array (
        ),
        'as' => 'generated::DNTexI46tjBOIJlX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gjRRtyVSyRSXHZP1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'publication/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Publication\\Create@__invoke',
        'controller' => 'App\\Http\\Livewire\\Publication\\Create',
        'namespace' => NULL,
        'prefix' => '/publication',
        'where' => 
        array (
        ),
        'as' => 'generated::gjRRtyVSyRSXHZP1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::apkgwObUreJqTAsn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'publication/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Publication\\Edit@__invoke',
        'controller' => 'App\\Http\\Livewire\\Publication\\Edit',
        'namespace' => NULL,
        'prefix' => '/publication',
        'where' => 
        array (
        ),
        'as' => 'generated::apkgwObUreJqTAsn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KGq5hFJdqi60D7ZX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'publication/preview/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Publication\\Preview@__invoke',
        'controller' => 'App\\Http\\Livewire\\Publication\\Preview',
        'namespace' => NULL,
        'prefix' => '/publication',
        'where' => 
        array (
        ),
        'as' => 'generated::KGq5hFJdqi60D7ZX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EHfxfzkUIcsL2kbj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'publication/evaluation/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Publication\\Evaluation@__invoke',
        'controller' => 'App\\Http\\Livewire\\Publication\\Evaluation',
        'namespace' => NULL,
        'prefix' => '/publication',
        'where' => 
        array (
        ),
        'as' => 'generated::EHfxfzkUIcsL2kbj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sqmfUe3ChJvx7lKO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'presentation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Presentation\\Index@__invoke',
        'controller' => 'App\\Http\\Livewire\\Presentation\\Index',
        'namespace' => NULL,
        'prefix' => '/presentation',
        'where' => 
        array (
        ),
        'as' => 'generated::sqmfUe3ChJvx7lKO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eK63rHRTfkTdQoAz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'presentation/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Presentation\\Create@__invoke',
        'controller' => 'App\\Http\\Livewire\\Presentation\\Create',
        'namespace' => NULL,
        'prefix' => '/presentation',
        'where' => 
        array (
        ),
        'as' => 'generated::eK63rHRTfkTdQoAz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EcAvunnRmSmJeLrM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'presentation/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Presentation\\Edit@__invoke',
        'controller' => 'App\\Http\\Livewire\\Presentation\\Edit',
        'namespace' => NULL,
        'prefix' => '/presentation',
        'where' => 
        array (
        ),
        'as' => 'generated::EcAvunnRmSmJeLrM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kaVdV6uUpYLW2tO5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'presentation/preview/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Presentation\\Preview@__invoke',
        'controller' => 'App\\Http\\Livewire\\Presentation\\Preview',
        'namespace' => NULL,
        'prefix' => '/presentation',
        'where' => 
        array (
        ),
        'as' => 'generated::kaVdV6uUpYLW2tO5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ccy39NoF9llapMgi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'presentation/evaluation/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Presentation\\Evaluation@__invoke',
        'controller' => 'App\\Http\\Livewire\\Presentation\\Evaluation',
        'namespace' => NULL,
        'prefix' => '/presentation',
        'where' => 
        array (
        ),
        'as' => 'generated::ccy39NoF9llapMgi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6VO4tF4JyRapzqNZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'extension',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Extension\\Index@__invoke',
        'controller' => 'App\\Http\\Livewire\\Extension\\Index',
        'namespace' => NULL,
        'prefix' => '/extension',
        'where' => 
        array (
        ),
        'as' => 'generated::6VO4tF4JyRapzqNZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dJP65FjnVf0YEat1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'extension/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Extension\\Create@__invoke',
        'controller' => 'App\\Http\\Livewire\\Extension\\Create',
        'namespace' => NULL,
        'prefix' => '/extension',
        'where' => 
        array (
        ),
        'as' => 'generated::dJP65FjnVf0YEat1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aROryc8v7Oiqz1hB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'extension/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Extension\\Edit@__invoke',
        'controller' => 'App\\Http\\Livewire\\Extension\\Edit',
        'namespace' => NULL,
        'prefix' => '/extension',
        'where' => 
        array (
        ),
        'as' => 'generated::aROryc8v7Oiqz1hB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wAIrjw2N8a0nnBB9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'extension/preview/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Extension\\Preview@__invoke',
        'controller' => 'App\\Http\\Livewire\\Extension\\Preview',
        'namespace' => NULL,
        'prefix' => '/extension',
        'where' => 
        array (
        ),
        'as' => 'generated::wAIrjw2N8a0nnBB9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5uowMUA2hO81VzeT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'extension/evaluation/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Extension\\Evaluation@__invoke',
        'controller' => 'App\\Http\\Livewire\\Extension\\Evaluation',
        'namespace' => NULL,
        'prefix' => '/extension',
        'where' => 
        array (
        ),
        'as' => 'generated::5uowMUA2hO81VzeT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UUdIJsyleNEdSd9i' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'training',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Training\\Index@__invoke',
        'controller' => 'App\\Http\\Livewire\\Training\\Index',
        'namespace' => NULL,
        'prefix' => '/training',
        'where' => 
        array (
        ),
        'as' => 'generated::UUdIJsyleNEdSd9i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GPFH3biwi8HktghP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'training/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Training\\Create@__invoke',
        'controller' => 'App\\Http\\Livewire\\Training\\Create',
        'namespace' => NULL,
        'prefix' => '/training',
        'where' => 
        array (
        ),
        'as' => 'generated::GPFH3biwi8HktghP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IjsfUGMznnDI4qbI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'training/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Training\\Edit@__invoke',
        'controller' => 'App\\Http\\Livewire\\Training\\Edit',
        'namespace' => NULL,
        'prefix' => '/training',
        'where' => 
        array (
        ),
        'as' => 'generated::IjsfUGMznnDI4qbI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0xnmKkGyQZYYs8Y9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'training/preview/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Training\\Preview@__invoke',
        'controller' => 'App\\Http\\Livewire\\Training\\Preview',
        'namespace' => NULL,
        'prefix' => '/training',
        'where' => 
        array (
        ),
        'as' => 'generated::0xnmKkGyQZYYs8Y9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mWkYSnZXiOeUYIwD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'training/evaluation/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Training\\Evaluation@__invoke',
        'controller' => 'App\\Http\\Livewire\\Training\\Evaluation',
        'namespace' => NULL,
        'prefix' => '/training',
        'where' => 
        array (
        ),
        'as' => 'generated::mWkYSnZXiOeUYIwD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z13YrEKUuzs4dNlm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'partnership',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Partnership\\Index@__invoke',
        'controller' => 'App\\Http\\Livewire\\Partnership\\Index',
        'namespace' => NULL,
        'prefix' => '/partnership',
        'where' => 
        array (
        ),
        'as' => 'generated::Z13YrEKUuzs4dNlm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fjaXagbbukG4Ph89' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'partnership/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Partnership\\Create@__invoke',
        'controller' => 'App\\Http\\Livewire\\Partnership\\Create',
        'namespace' => NULL,
        'prefix' => '/partnership',
        'where' => 
        array (
        ),
        'as' => 'generated::fjaXagbbukG4Ph89',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QKEcqGRcVbOywEj8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'partnership/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Partnership\\Edit@__invoke',
        'controller' => 'App\\Http\\Livewire\\Partnership\\Edit',
        'namespace' => NULL,
        'prefix' => '/partnership',
        'where' => 
        array (
        ),
        'as' => 'generated::QKEcqGRcVbOywEj8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zdq23ScymwqHGW4s' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'partnership/preview/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Partnership\\Preview@__invoke',
        'controller' => 'App\\Http\\Livewire\\Partnership\\Preview',
        'namespace' => NULL,
        'prefix' => '/partnership',
        'where' => 
        array (
        ),
        'as' => 'generated::Zdq23ScymwqHGW4s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N9Gsc7o4G2bxYoQ8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'partnership/evaluation/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Partnership\\Evaluation@__invoke',
        'controller' => 'App\\Http\\Livewire\\Partnership\\Evaluation',
        'namespace' => NULL,
        'prefix' => '/partnership',
        'where' => 
        array (
        ),
        'as' => 'generated::N9Gsc7o4G2bxYoQ8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pVffJVk6CyRgUegd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'symlink',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function(){
    \\Artisan::call(\'storage:link\');
    return \'Link created!\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000019f4c3d6000000004aa4e291";}";s:4:"hash";s:44:"NSdOlWYefnqrC8aJipnoDPBFxt6x0KogijMIXuwfWYQ=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pVffJVk6CyRgUegd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5428QSK3tNfwYUvQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'phpinfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:254:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:36:"function(){
    return \\phpinfo();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000019f4c395000000004aa4e291";}";s:4:"hash";s:44:"FJ+y1pHWnZeVN8b7vZnqwfrgQBfp/jMoyyHYpyVLsQA=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5428QSK3tNfwYUvQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pheBPHys0nELRrTF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:494:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:275:"function(){
    \\Artisan::call(\'view:clear\');
    \\Artisan::call(\'route:cache\');
    \\Artisan::call(\'route:clear\');
    \\Artisan::call(\'cache:clear\');
    \\Artisan::call(\'config:clear\');
    \\Artisan::call(\'config:cache\');
    echo \'Clear all things required to clear....\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000019f4c397000000004aa4e291";}";s:4:"hash";s:44:"CyaXvyzRZ8x8D1efX3JS4HL8P/4gRzq7pam2Wgk7odU=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pheBPHys0nELRrTF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jRPLL52QGYwgnq7m' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'optimize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:287:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:69:"function(){
    \\Artisan::call(\'optimize\');
    return \'Optmized!\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000019f4c391000000004aa4e291";}";s:4:"hash";s:44:"rAyF+kQXsn9vglfMU0D0mflcmXfrRm0LuVeFnGQTZ+g=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::jRPLL52QGYwgnq7m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t9aWtVqF8tKFAov1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'migrate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:286:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:68:"function(){
    \\Artisan::call(\'migrate\');
    return \'Migrated!\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000019f4c393000000004aa4e291";}";s:4:"hash";s:44:"NHgRUQ9KfNTl9uDQg+BJv1S8ylyjF29eZo5KxpmofOM=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::t9aWtVqF8tKFAov1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mQPb5AnDFHbzv7hT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:285:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:67:"function(){
    \\Artisan::call(\'db:seed\');
    return \'DB Seed!\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000019f4c39d000000004aa4e291";}";s:4:"hash";s:44:"doTD92rQfHbNTv5Vm0ZiN3E3dLZOYcekyaNUFhUzoCE=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mQPb5AnDFHbzv7hT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V8rUL5ExN0ozL274' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FileUpload\\FileUploadController@upload',
        'controller' => 'App\\Http\\Controllers\\FileUpload\\FileUploadController@upload',
        'namespace' => NULL,
        'prefix' => '/file',
        'where' => 
        array (
        ),
        'as' => 'generated::V8rUL5ExN0ozL274',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::troaffO0aAfN0XNd' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'file/undo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FileUpload\\FileUploadController@undo',
        'controller' => 'App\\Http\\Controllers\\FileUpload\\FileUploadController@undo',
        'namespace' => NULL,
        'prefix' => '/file',
        'where' => 
        array (
        ),
        'as' => 'generated::troaffO0aAfN0XNd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AoO6HsNToe9paJL5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000019f4c39b000000004aa4e291";}";s:4:"hash";s:44:"Le1Ie26BLPc7P+fGyUBthibR+uxIcqnma3NgX1crDKc=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::AoO6HsNToe9paJL5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
