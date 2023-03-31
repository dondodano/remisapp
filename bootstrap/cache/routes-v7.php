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
            '_route' => 'generated::nL5znBuRU63zMcnv',
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
            '_route' => 'generated::Acz5dtz3X3AWM502',
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
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IR5YOgh4fOZd2ji8',
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
            '_route' => 'generated::kV5RfFKz4ujDjLh3',
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
            '_route' => 'generated::3lo3PPQmQ5FzMDmm',
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
            '_route' => 'generated::293lTrFZdMh21BJR',
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
            '_route' => 'generated::hSejzYWi461pnkuF',
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
            '_route' => 'generated::43ksMraawCbY3b57',
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
            '_route' => 'generated::VKLrENY2SCbkVu9V',
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
            '_route' => 'generated::1A6djJfoaphjzSO0',
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
            '_route' => 'generated::Dk5NZc1HAdQAm9uN',
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
            '_route' => 'generated::FLQQWY5OJdks4ERG',
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
            '_route' => 'generated::TOzebpVQ51L7qeiR',
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
            '_route' => 'generated::xv4qrZmxJLVGwDBA',
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
            '_route' => 'generated::ECPjjikLRtOy1u7L',
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
            '_route' => 'generated::t4dVdLFHz89ZNbk4',
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
            '_route' => 'generated::g7dFE9TQ3g3DhbhC',
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
            '_route' => 'generated::JydACWU4ni9DsxLD',
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
            '_route' => 'generated::cYGo6UfZzXeNthdX',
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
            '_route' => 'generated::JoE4MTEpsXGzfEmv',
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
            '_route' => 'generated::VxZfDRx3W9s6BIqG',
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
            '_route' => 'generated::4yUqDbpuCMYFN9n5',
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
            '_route' => 'generated::Quu5dyYRliOYzKs2',
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
            '_route' => 'generated::yEF11xyRZj7BYtL9',
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
            '_route' => 'generated::8X7XW11dYAu9CZHf',
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
            '_route' => 'generated::HyMG81NO2Pd1d79S',
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
            '_route' => 'generated::ZnGdzZ1Ife26ypIR',
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
            '_route' => 'generated::ptWr8IRg1FEmMcDh',
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
            '_route' => 'generated::9unFZPHGuvhmnLhx',
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
            '_route' => 'generated::QWi1aohG6wXXgwm4',
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
            '_route' => 'generated::qEvOZnOrr6PJPt1P',
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
            '_route' => 'generated::IWoV8Ieb0OrhCgjJ',
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
            '_route' => 'generated::y5aOGK60C73cPbRz',
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
            '_route' => 'generated::qbx69jKpynlRDQaC',
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
            '_route' => 'generated::MxDZlnmyMmureqfz',
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
            '_route' => 'generated::N2C1xBzNrN6MA95l',
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
            '_route' => 'generated::snpRK7p2SZCcQyXF',
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
            '_route' => 'generated::wdqB7jZCEBoDg16m',
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
            '_route' => 'generated::EftZdii0W9GfUjgP',
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
            '_route' => 'generated::ELaWMabCRmzQjKmp',
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
            '_route' => 'generated::nIZ9s7eBtSVkULjf',
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
            '_route' => 'generated::dsGzFtgXMPIeqSmv',
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
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q1pqAvQ3oJ2xlEJ6',
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
            '_route' => 'generated::4wLFyD3m0B2vGUKx',
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
            '_route' => 'generated::RkylEoG3tXuQm8xz',
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
            '_route' => 'generated::3emDleqkfZ3ajW05',
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
            '_route' => 'generated::ELTzZVVrjAwG61qT',
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
            '_route' => 'generated::UkUNTtJphiHvfuHW',
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
            '_route' => 'generated::DnwErzI8U9dHnOgq',
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
            '_route' => 'generated::2lY6CrjLy0dXSYu5',
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
            '_route' => 'generated::xYSktf2VLqbiGM0p',
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
            '_route' => 'generated::DwdopmpG09qu0QdI',
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
            '_route' => 'generated::4aFqtM9sXQKJh0Ib',
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
            '_route' => 'generated::d2E0QjcK4gG4j57G',
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
            '_route' => 'generated::xIjjBOJvKiszLgLM',
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
            '_route' => 'generated::tAiiarDEavJJNOal',
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
            '_route' => 'generated::7UuekFlNJwGBVLp7',
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
            '_route' => 'generated::6s7H7kqb1PE528lu',
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
            '_route' => 'generated::cRZXZEJ3auxEyq9R',
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
            '_route' => 'generated::YUcgo1L7R5hfToxB',
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
            '_route' => 'generated::AqgUw1G2fmFVh4GS',
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
            '_route' => 'generated::FKUANEorp8rTtXcC',
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
            '_route' => 'generated::GJmmJJNIlsHUAYOa',
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
            '_route' => 'generated::WVRmvtBIvhmDwTC6',
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
            '_route' => 'generated::sr7rUmzPML9j3HPS',
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
            '_route' => 'generated::LtfNJJ7hWUkhcg0z',
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
            '_route' => 'generated::Ahp05B1IRoQkJ3mx',
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
            '_route' => 'generated::ty8jPppeR0f8vmYP',
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
            '_route' => 'generated::i9lYL9aW6GVWVmTA',
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
            '_route' => 'generated::5dWxHVJKRlJTcpQZ',
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
            '_route' => 'generated::jC9RwnfDNVdgKV9M',
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
    'generated::nL5znBuRU63zMcnv' => 
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
        'as' => 'generated::nL5znBuRU63zMcnv',
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
    'generated::Acz5dtz3X3AWM502' => 
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
        'as' => 'generated::Acz5dtz3X3AWM502',
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
    'generated::IR5YOgh4fOZd2ji8' => 
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
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:259:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:41:"function(){ return \\redirect(\'/login\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000004ed799cb000000007c5efb26";}";s:4:"hash";s:44:"V4TSAafLn0SjCNyHDWCXWrzujDKBORNNJTzomlxeh+Q=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IR5YOgh4fOZd2ji8',
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
    'generated::4wLFyD3m0B2vGUKx' => 
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
        'as' => 'generated::4wLFyD3m0B2vGUKx',
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
    'generated::RkylEoG3tXuQm8xz' => 
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
        'as' => 'generated::RkylEoG3tXuQm8xz',
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
    'generated::3emDleqkfZ3ajW05' => 
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
        'as' => 'generated::3emDleqkfZ3ajW05',
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
    'generated::kV5RfFKz4ujDjLh3' => 
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
        'as' => 'generated::kV5RfFKz4ujDjLh3',
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
    'generated::3lo3PPQmQ5FzMDmm' => 
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
        'as' => 'generated::3lo3PPQmQ5FzMDmm',
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
    'generated::293lTrFZdMh21BJR' => 
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
        'as' => 'generated::293lTrFZdMh21BJR',
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
    'generated::ELTzZVVrjAwG61qT' => 
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
        'as' => 'generated::ELTzZVVrjAwG61qT',
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
    'generated::hSejzYWi461pnkuF' => 
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
        'as' => 'generated::hSejzYWi461pnkuF',
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
    'generated::43ksMraawCbY3b57' => 
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
        'as' => 'generated::43ksMraawCbY3b57',
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
    'generated::VKLrENY2SCbkVu9V' => 
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
        'as' => 'generated::VKLrENY2SCbkVu9V',
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
    'generated::1A6djJfoaphjzSO0' => 
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
        'as' => 'generated::1A6djJfoaphjzSO0',
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
    'generated::UkUNTtJphiHvfuHW' => 
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
        'as' => 'generated::UkUNTtJphiHvfuHW',
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
    'generated::Dk5NZc1HAdQAm9uN' => 
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
        'as' => 'generated::Dk5NZc1HAdQAm9uN',
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
    'generated::FLQQWY5OJdks4ERG' => 
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
        'as' => 'generated::FLQQWY5OJdks4ERG',
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
    'generated::DnwErzI8U9dHnOgq' => 
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
        'as' => 'generated::DnwErzI8U9dHnOgq',
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
    'generated::TOzebpVQ51L7qeiR' => 
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
        'as' => 'generated::TOzebpVQ51L7qeiR',
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
    'generated::xv4qrZmxJLVGwDBA' => 
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
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000004ed799e2000000007c5efb26";}";s:4:"hash";s:44:"VSNDt1862Dp2Ffz+hp6JnBnHB35tTuGZtBlELw2p2Rk=";}}',
        'namespace' => NULL,
        'prefix' => '/system-backup',
        'where' => 
        array (
        ),
        'as' => 'generated::xv4qrZmxJLVGwDBA',
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
    'generated::cRZXZEJ3auxEyq9R' => 
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
        'as' => 'generated::cRZXZEJ3auxEyq9R',
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
    'generated::YUcgo1L7R5hfToxB' => 
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
        'as' => 'generated::YUcgo1L7R5hfToxB',
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
    'generated::ECPjjikLRtOy1u7L' => 
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
        'as' => 'generated::ECPjjikLRtOy1u7L',
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
    'generated::t4dVdLFHz89ZNbk4' => 
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
        'as' => 'generated::t4dVdLFHz89ZNbk4',
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
    'generated::AqgUw1G2fmFVh4GS' => 
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
        'as' => 'generated::AqgUw1G2fmFVh4GS',
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
    'generated::FKUANEorp8rTtXcC' => 
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
        'as' => 'generated::FKUANEorp8rTtXcC',
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
    'generated::g7dFE9TQ3g3DhbhC' => 
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
        'as' => 'generated::g7dFE9TQ3g3DhbhC',
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
    'generated::JydACWU4ni9DsxLD' => 
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
        'as' => 'generated::JydACWU4ni9DsxLD',
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
    'generated::cYGo6UfZzXeNthdX' => 
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
        'as' => 'generated::cYGo6UfZzXeNthdX',
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
    'generated::JoE4MTEpsXGzfEmv' => 
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
        'as' => 'generated::JoE4MTEpsXGzfEmv',
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
    'generated::VxZfDRx3W9s6BIqG' => 
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
        'as' => 'generated::VxZfDRx3W9s6BIqG',
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
    'generated::4yUqDbpuCMYFN9n5' => 
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
        'as' => 'generated::4yUqDbpuCMYFN9n5',
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
    'generated::Quu5dyYRliOYzKs2' => 
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
        'as' => 'generated::Quu5dyYRliOYzKs2',
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
    'generated::yEF11xyRZj7BYtL9' => 
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
        'as' => 'generated::yEF11xyRZj7BYtL9',
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
    'generated::8X7XW11dYAu9CZHf' => 
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
        'as' => 'generated::8X7XW11dYAu9CZHf',
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
    'generated::HyMG81NO2Pd1d79S' => 
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
        'as' => 'generated::HyMG81NO2Pd1d79S',
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
    'generated::ZnGdzZ1Ife26ypIR' => 
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
        'as' => 'generated::ZnGdzZ1Ife26ypIR',
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
    'generated::ptWr8IRg1FEmMcDh' => 
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
        'as' => 'generated::ptWr8IRg1FEmMcDh',
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
    'generated::GJmmJJNIlsHUAYOa' => 
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
        'as' => 'generated::GJmmJJNIlsHUAYOa',
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
    'generated::sr7rUmzPML9j3HPS' => 
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
        'as' => 'generated::sr7rUmzPML9j3HPS',
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
    'generated::WVRmvtBIvhmDwTC6' => 
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
        'as' => 'generated::WVRmvtBIvhmDwTC6',
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
    'generated::9unFZPHGuvhmnLhx' => 
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
        'as' => 'generated::9unFZPHGuvhmnLhx',
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
    'generated::QWi1aohG6wXXgwm4' => 
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
        'as' => 'generated::QWi1aohG6wXXgwm4',
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
    'generated::4aFqtM9sXQKJh0Ib' => 
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
        'as' => 'generated::4aFqtM9sXQKJh0Ib',
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
    'generated::xIjjBOJvKiszLgLM' => 
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
        'as' => 'generated::xIjjBOJvKiszLgLM',
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
    'generated::d2E0QjcK4gG4j57G' => 
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
        'as' => 'generated::d2E0QjcK4gG4j57G',
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
    'generated::qEvOZnOrr6PJPt1P' => 
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
        'as' => 'generated::qEvOZnOrr6PJPt1P',
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
    'generated::IWoV8Ieb0OrhCgjJ' => 
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
        'as' => 'generated::IWoV8Ieb0OrhCgjJ',
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
    'generated::2lY6CrjLy0dXSYu5' => 
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
        'as' => 'generated::2lY6CrjLy0dXSYu5',
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
    'generated::DwdopmpG09qu0QdI' => 
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
        'as' => 'generated::DwdopmpG09qu0QdI',
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
    'generated::xYSktf2VLqbiGM0p' => 
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
        'as' => 'generated::xYSktf2VLqbiGM0p',
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
    'generated::y5aOGK60C73cPbRz' => 
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
        'as' => 'generated::y5aOGK60C73cPbRz',
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
    'generated::qbx69jKpynlRDQaC' => 
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
        'as' => 'generated::qbx69jKpynlRDQaC',
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
    'generated::LtfNJJ7hWUkhcg0z' => 
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
        'as' => 'generated::LtfNJJ7hWUkhcg0z',
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
    'generated::ty8jPppeR0f8vmYP' => 
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
        'as' => 'generated::ty8jPppeR0f8vmYP',
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
    'generated::Ahp05B1IRoQkJ3mx' => 
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
        'as' => 'generated::Ahp05B1IRoQkJ3mx',
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
    'generated::MxDZlnmyMmureqfz' => 
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
        'as' => 'generated::MxDZlnmyMmureqfz',
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
    'generated::N2C1xBzNrN6MA95l' => 
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
        'as' => 'generated::N2C1xBzNrN6MA95l',
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
    'generated::i9lYL9aW6GVWVmTA' => 
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
        'as' => 'generated::i9lYL9aW6GVWVmTA',
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
    'generated::jC9RwnfDNVdgKV9M' => 
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
        'as' => 'generated::jC9RwnfDNVdgKV9M',
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
    'generated::5dWxHVJKRlJTcpQZ' => 
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
        'as' => 'generated::5dWxHVJKRlJTcpQZ',
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
    'generated::snpRK7p2SZCcQyXF' => 
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
        'as' => 'generated::snpRK7p2SZCcQyXF',
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
    'generated::wdqB7jZCEBoDg16m' => 
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
        'as' => 'generated::wdqB7jZCEBoDg16m',
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
    'generated::tAiiarDEavJJNOal' => 
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
        'as' => 'generated::tAiiarDEavJJNOal',
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
    'generated::6s7H7kqb1PE528lu' => 
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
        'as' => 'generated::6s7H7kqb1PE528lu',
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
    'generated::7UuekFlNJwGBVLp7' => 
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
        'as' => 'generated::7UuekFlNJwGBVLp7',
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
    'generated::EftZdii0W9GfUjgP' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000004ed799d3000000007c5efb26";}";s:4:"hash";s:44:"f9VedGcxf2VvIGuga5s0SZOeg1Sd/1m6JK8LzsVb67Q=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EftZdii0W9GfUjgP',
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
    'generated::ELaWMabCRmzQjKmp' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000004ed79a12000000007c5efb26";}";s:4:"hash";s:44:"se5Pws72RJ+d0IcD5rAiCy7I2zz5ROJUyK3XzonS564=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ELaWMabCRmzQjKmp',
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
    'generated::nIZ9s7eBtSVkULjf' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000004ed79a14000000007c5efb26";}";s:4:"hash";s:44:"iQWTwYJC4fgrj8N7XmDRTxxRXXHz9Ng6HtubIly4Q8Y=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nIZ9s7eBtSVkULjf',
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
    'generated::dsGzFtgXMPIeqSmv' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000004ed79a16000000007c5efb26";}";s:4:"hash";s:44:"9IgoI83tXvUCX+jFQNw5P/keluWEyEZwtmChkggs4no=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dsGzFtgXMPIeqSmv',
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
    'generated::Q1pqAvQ3oJ2xlEJ6' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000004ed79a1a000000007c5efb26";}";s:4:"hash";s:44:"egF2Vyua8REwz/XtunobymHDU/4p7s7kA1vMiJZ9utk=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Q1pqAvQ3oJ2xlEJ6',
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
