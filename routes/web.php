<?php

use App\Http\Livewire\Log;

/**
 * Controller
 */
use App\Http\Livewire\User;
use App\Http\Livewire\Research;
use App\Http\Livewire\Training;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Extension;
use App\Http\Livewire\Partnership;
use App\Http\Livewire\Publication;
use App\Http\Livewire\Presentation;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Livewire\Requisite\Program;
use App\Http\Livewire\Requisite\ResponsibilityCenter;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Log\LogUserController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\Auth\RegisterController;

/**
 * Livewire
 */
use App\Http\Controllers\Backup\SystemController;
use App\Http\Controllers\User\PasswordController;
use App\Http\Controllers\Backup\DatabaseController;
use App\Http\Controllers\Setting\WebiconController;
use App\Http\Controllers\Requisite\ProgramController;
use App\Http\Controllers\User\UserSendMailController;
use App\Http\Controllers\User\ResetPasswordController;
use App\Http\Controllers\Log\LogUserActivityController;
use App\Http\Controllers\Requisite\InstituteController;
use App\Http\Controllers\User\ForgotPasswordController;
use App\Http\Controllers\FileUpload\FileUploadController;
use App\Http\Controllers\Setting\GeneralSettingController;
use App\Http\Controllers\User\UserAuthorizationController;
use App\Http\Controllers\Maintenance\MaintenanceController;
use App\Http\Controllers\User\FirstAccessChangePasswordController;

Route::middleware(['onproduction'])->group(function(){
    /**
     * Clear cache
     */
    Route::get('/clear', function(){
        Artisan::call('view:clear');
        Artisan::call('route:cache');
        Artisan::call('route:clear');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('config:cache');
        echo 'Clear all things required to clear....';
    });

    /**
     * Run optimize on config
     */
    Route::get('/optimize', function(){
        Artisan::call('optimize');
        return 'Optmized!';
    });

    /**
     * Run storage link
     */
    Route::get('/symlink', function(){
        Artisan::call('storage:link');
        return 'Link created!';
    });

    /**
     * Show php info
     */
    Route::get('/phpinfo', function(){
        return phpinfo();
    });

    /**
     * Execute database migation
     */
    Route::get('/migrate', function(){
        Artisan::call('migrate');
        return 'Migrated!';
    });

    /**
     * Execute database seeding
     */
    Route::get('/seed', function(){
        Artisan::call('db:seed');
        return 'DB Seed!';
    });

    /**
     * Execute deploy
     */
    Route::get('/deploy', function(){
        Artisan::call('deploy:now');
        return 'System Deployed!';
    });
});


Route::middleware('guest')->group(function(){
    /**
     * Landing Page
     */
    Route::get('/', function(){
        return view('landing.index');
    });
    Route::get('/home', function(){
        return view('landing.index');
    });

    /**
     * Auth
     */
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'signin'])->name('login.submit');

    /**
     * Register
     */
    Route::get('/register',[RegisterController::class, 'index']);
    Route::post('/register',[RegisterController::class, 'save']);
});

/**
 * Logged Out
 */
Route::get('/logout', [AuthController::class, 'signout'])->middleware(['auth'])->name('guest');


/**
 * Authorized
 */
Route::get('/auth/{token}', [UserAuthorizationController::class, 'index']);


/**
 * Forgot Password
 */
Route::get('/forgot-password', [ForgotPasswordController::class, 'index']);
Route::post('/forgot-password', [ForgotPasswordController::class, 'send']);


/**
 * Reset Password
 */
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'index']);
Route::put('/reset-password/{token}', [ResetPasswordController::class, 'reset']);


/**
 * Change Password for First Time
 */
Route::get('/change-password/{token}', [FirstAccessChangePasswordController::class, 'index']);
Route::put('/change-password/{token}', [FirstAccessChangePasswordController::class, 'update']);


Route::prefix('/dashboard')->middleware(['auth'])->group(function(){
    Route::get('', Dashboard\Index::class);
});


/**
 * User
 */
Route::prefix('/user')->middleware(['auth', 'can:is_super, can:is_admin'])->group(function(){
    Route::get('', User\Index::class);
    Route::get('/create', User\Create::class);
    Route::get('/edit/{id}', User\Edit::class);
});


/**
 * User Log
 */
Route::prefix('/user-log')->middleware(['auth', 'can:is_super'])->group(function(){
    Route::get('', Log\UserLog::class);
});


/**
 * Activity Log
 */
Route::prefix('/activity-log')->middleware(['auth', 'can:is_super'])->group(function(){
    Route::get('', Log\UserActivityLog::class);
});


/**
 * Requisite Responsibility Center
 */
Route::prefix('/rc')->middleware(['auth', 'can:is_super, can:is_admin'])->group(function(){
    Route::get('', ResponsibilityCenter\Index::class);
    Route::get('/create', ResponsibilityCenter\Create::class);
    Route::get('/edit/{id}', ResponsibilityCenter\Edit::class);
});


/**
 * Requisite Program
 */
Route::prefix('/program')->middleware(['auth', 'can:is_super, can:is_admin'])->group(function(){
    Route::get('', Program\Index::class);
    Route::get('/create', Program\Create::class);
    Route::get('/edit/{id}', Program\Edit::class);
});


/**
 * Backup System
 */
Route::prefix('/system-backup')->middleware(['auth', 'can:is_super'])->group(function(){
    Route::get('', [SystemController::class, 'index']);
    Route::get('/create', function(Illuminate\Http\Request $request){
        ini_set('max_execution_time', 300);
        ini_set('memory_limit', '256 M');
        ini_set('post_max_size', '500 M');
        ini_set('error_reporting', E_ALL);



        $parent_dir =  (bool)config('app.app_deployed') == false ? 'remisapp/' :  'public_html/' ;

        $path = dirname(__DIR__);

        $zip_file = 'backup-'. time().'.zip';
        $zip = new ZipArchive();
        if($zip->open($zip_file, ZipArchive::CREATE  | ZipArchive::OVERWRITE) == TRUE)
        {
            $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));
            foreach ($files as $name => $file)
            {
                if (!$file->isDir())
                {
                    $filePath = $file->getRealPath();

                    $relativePath = $parent_dir . substr($filePath, strlen($path) + 1);

                    $file_extension = new SplFileInfo($filePath);
                    if($file_extension->getExtension() != 'zip')
                    {
                        $zip->addFile($filePath, $relativePath);
                    }
                }
            }
            $zip->close();

            if ($zip->status != ZipArchive::ER_OK)
            {
                toastr("Failed to generate backup!", "error");
                return back();
            }

        }

        if((bool)config('app.app_deployed') == true)
        {
            $path = dirname(__DIR__);

            copy( $path .'/'. $zip_file ,  public_path() . '/storage/backups/' . $zip_file);
            unlink($path .'/'. $zip_file);
        }else{
            moveFile($zip_file );
        }

        toastr("System backup successfully created!", "success");
        return back();
    });
    Route::get('/download/{file}', [SystemController::class, 'download']);
    Route::delete('/delete/{file}', [SystemController::class, 'delete']);
});


/**
 * Backup System
 */
Route::prefix('/database-backup')->middleware(['auth', 'can:is_super'])->group(function(){
    Route::get('', [DatabaseController::class, 'index']);
    Route::get('/create', [DatabaseController::class, 'create']);
    Route::get('/download/{file}', [DatabaseController::class, 'download']);
    Route::delete('/delete/{file}', [DatabaseController::class, 'delete']);
});


/**
 * System Setting
 */
Route::prefix('/general')->middleware(['auth', 'can:is_super'])->group(function(){
    Route::get('', [GeneralSettingController::class, 'index']);
    Route::post('/update', [GeneralSettingController::class, 'update']);
});


/**
 * Webicon Setting
 */
Route::prefix('/webicon')->middleware(['auth', 'can:is_super'])->group(function(){
    Route::get('', [WebiconController::class, 'index']);
    Route::post('/update', [WebiconController::class, 'update']);
});


/**
 * Maintenance
 */
Route::prefix('/maintenance')->middleware(['auth', 'can:is_super'])->group(function(){
    Route::get('', [MaintenanceController::class, 'index']);
    Route::post('/update', [MaintenanceController::class, 'update']);
});


/**
 * My Password & Profile
 */
Route::prefix('/my')->middleware(['auth'])->group(function(){
    Route::get('/password', [PasswordController::class, 'index']);
    Route::post('/password', [PasswordController::class, 'update']);

    Route::get('/profile', [ProfileController::class, 'index']);
    Route::post('/profile', [ProfileController::class, 'update']);
});





/**
 * Research : Require Update
 */
Route::prefix('/research')->middleware(['auth'])->group(function(){
    Route::get('/', Research\Index::class);
    Route::get('/create', Research\Create::class);
    Route::get('/edit/{id}',Research\Edit::class);
    Route::get('/preview/{id}', Research\Preview::class);
    Route::get('/evaluation/{id}', Research\Evaluation::class);
});


/**
 * Publication
 */
Route::prefix('/publication')->middleware(['auth'])->group(function(){
    Route::get('/', Publication\Index::class);
    Route::get('/create', Publication\Create::class);
    Route::get('/edit/{id}',Publication\Edit::class);
    Route::get('/preview/{id}', Publication\Preview::class);
    Route::get('/evaluation/{id}', Publication\Evaluation::class);
});


/**
 * Presentation
 */
Route::prefix('/presentation')->middleware(['auth'])->group(function(){
    Route::get('/', Presentation\Index::class);
    Route::get('/create', Presentation\Create::class);
    Route::get('/edit/{id}',Presentation\Edit::class);
    Route::get('/preview/{id}', Presentation\Preview::class);
    Route::get('/evaluation/{id}', Presentation\Evaluation::class);
});


/**
 * Extension
 */
Route::prefix('/extension')->middleware(['auth'])->group(function(){
    Route::get('/', Extension\Index::class);
    Route::get('/create', Extension\Create::class);
    Route::get('/edit/{id}',Extension\Edit::class);
    Route::get('/preview/{id}', Extension\Preview::class);
    Route::get('/evaluation/{id}', Extension\Evaluation::class);
});


/**
 * Training
 */
Route::prefix('/training')->middleware(['auth'])->group(function(){
    Route::get('/', Training\Index::class);
    Route::get('/create', Training\Create::class);
    Route::get('/edit/{id}',Training\Edit::class);
    Route::get('/preview/{id}', Training\Preview::class);
    Route::get('/evaluation/{id}', Training\Evaluation::class);
});


/**
 * Partnership
 */
Route::prefix('/partnership')->middleware(['auth'])->group(function(){
    Route::get('/', Partnership\Index::class);
    Route::get('/create', Partnership\Create::class);
    Route::get('/edit/{id}',Partnership\Edit::class);
    Route::get('/preview/{id}', Partnership\Preview::class);
    Route::get('/evaluation/{id}', Partnership\Evaluation::class);
});
