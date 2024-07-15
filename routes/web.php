<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\TestimonailController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ClassificationController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MammalController;
use App\Http\Controllers\BirdController;
use App\Http\Controllers\FishController;
use App\Http\Controllers\ReptileController;
use App\Http\Controllers\AmphibianController;
use App\Http\Controllers\SponsoranimalController;
use App\Http\Controllers\SetweekanimalController;
use App\Http\Controllers\ForgetPasswordManager;
use App\Http\Controllers\ReportController;
use App\Http\Middleware\IsAdmin;

// Route::get('/about', [HomeController::class, 'about']);
// Route::get('/contact', [HomeController::class, 'contact']);


Route::get('/index', [HomeController::class, 'index']);
Route::get('/gallery', [HomeController::class, 'gallery'])->name('animalgallery');
Route::get('/gallery/sponsorgallery', [HomeController::class, 'sponsorGallery'])->name('sponsorgallery');
// Route::get('/animal/sponsoranimal', [HomeController::class, 'sponsorAnimal'])->name('sponsoranimal');
Route::get('/testimonial', [HomeController::class, 'sponsorTestimonial'])->name('sponsortestimonial');

Route::get('/visitor/visitorgallery', [HomeController::class, 'visitorGallery'])->name('visitorgallery');
// Route::get('/visitor/visitoranimal', [HomeController::class, 'visitorAnimal'])->name('visitoranimal');
Route::get('/visitor/visitorvacancy', [HomeController::class, 'visitorVacancy'])->name('visitorvacancy');

Route::get('/ticket/vbookticket', [TicketController::class, 'vticket'])->name('vbookticket');

Route::get('/ticket', [TicketController::class, 'ticket'])->name('bookticket');
Route::post('/ticket', [TicketController::class, 'ticketCreate'])->name('ticketcreate');
Route::get('/admin/showticket', [TicketController::class, 'show'])->name('viewticket');



Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/vacancy', [HomeController::class, 'vacancy'])->name('vacancy');
Route::get('/visitor/contact', [HomeController::class, 'vcontact'])->name('vcontact');



Route::get('/visitor', [VisitorController::class, 'visitor'])->name('registervisitor');
Route::post('/visitor', [VisitorController::class, 'visitorCreate'])->name('visitorcreate');
// Route::get('/visitor/visitorpage', [VisitorController::class, 'visitorPage'])->name('visitorpage');

Route::get('/sponsor', [SponsorController::class, 'sponsor'])->name('registersponsor');
Route::post('/sponsor/sponsorcreate', [SponsorController::class, 'sponsorCreate'])->name('sponsorcreate');


Route::get('/login', [LoginController::class, 'loginVisitor'])->name('loginvisitor');
Route::post('/visitor/checkvisitor', [VisitorController::class, 'checkVisitor'])->name('checkvisitor');

Route::get('/loginsponsor', [LoginController::class, 'loginSponsor'])->name('loginsponsor');
Route::post('/sponsor/checkSponsor', [SponsorController::class, 'checkSponsor'])->name('checksponsor');

Route::get('/admin/showadmin', [AdminController::class, 'show'])->name('viewadmin');
Route::get('/admin/editadmin/{id}',[AdminController::class,'edit'])->name('editadmin');
Route::post('/admin/editadmin/{id}',[AdminController::class,'update'])->name('updateadmin');
Route::get('/admin/deleteadmin/{id}',[AdminController::class,'destory'])->name('deleteadmin');
Route::post('/admin/checkadmin', [AdminController::class, 'checkAdmin'])->name('checkadmin');
Route::post('/admin/admincreate', [AdminController::class, 'adminCreate'])->name('admincreate');
Route::get('/admin/addadmin',[AdminController::class,'addadmin'])->name('addadmin');
Route::get('/admin/adminlogin',[AdminController::class,'adminLogin'])->name('adminlogin');
// Route::get('/admin',[AdminController::class,'admin'])->name('admindashboard');

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/admin/viewvisitor', [VisitorController::class, 'show'])->name('viewvisitor');
Route::get('/admin/showvisitor/{id}',[VisitorController::class,'destory'])->name('deletevisitor');


Route::get('/admin/showsponsor', [SponsorController::class, 'show'])->name('viewsponsor');
Route::get('/admin/showsponsor/{id}',[SponsorController::class,'destory'])->name('deletesponsor');

Route::get('/admin/registervacancy', [VacancyController::class, 'vacancy'])->name('regvacancy');
Route::post('/admin/registervacancy', [VacancyController::class, 'vacancyCreate'])->name('vacancycreate');

Route::get('/vacancy',[VacancyController::class,'show'])->name('showvacancy');
Route::get('/vacancy/vshowvacancy',[VacancyController::class,'vshow'])->name('vshowvacancy');
Route::get('/vacancy/employeelist',[EmployeeController::class,'employee'])->name('viewemplyeelist');


Route::get('/admin/showvacancy',[VacancyController::class,'vacancyShow'])->name('activevacancy');

Route::get('/admin/editvacancy/{id}',[VacancyController::class,'edit'])->name('editvacancy');
Route::post('/admin/editvacancy/{id}',[VacancyController::class,'update'])->name('updatevacancy');
Route::get('/admin/deletevacancy/{id}',[VacancyController::class,'destory'])->name('deletevacancy');

Route::get('/visitor/applyvacancy', [ApplicationController::class, 'application'])->name('apply');
Route::post('/apply', [ApplicationController::class, 'applicationCreate'])->name('applicationcreate');
Route::post('/employee/{id}', [EmployeeController::class, 'employeeCreate'])->name('employeecreate');
Route::get('/admin/showemployee', [EmployeeController::class, 'show'])->name('viewemployee');
Route::get('/admin/deleteemployee/{id}',[EmployeeController::class,'destory'])->name('deleteemployee');
Route::get('/admin/deleteapplication/{id}',[ApplicationController::class,'destory'])->name('deleteapplication');
Route::get('/admin/showapplication', [ApplicationController::class, 'show'])->name('viewapplication');

Route::post('/sponsor/{id}', [TestimonailController::class, 'testimonialCreate'])->name('testcreate');
Route::get('/', [TestimonailController::class, 'show'])->name('viewtest');



Route::post('/visitor/updatevisitor/{id}',[VisitorController::class,'update'])->name('updatevisitor');
Route::get('/visitor/viewvisitor', [VisitorController::class, 'vregshow'])->name('viewregvisitor');

Route::post('/sponsor/updatesponsor/{id}',[SponsorController::class,'update'])->name('updatesponsor');
Route::get('/sponsor/viewsponsor', [SponsorController::class, 'sregshow'])->name('viewregsponsor');

Route::get('/gallery/addgallery', [GalleryController::class, 'gallery'])->name('viewgallery');
Route::post('/gallery/gallerycreate', [GalleryController::class, 'galleryCreate'])->name('gallerycreate');
Route::get('/admin/showgallery', [GalleryController::class, 'show'])->name('showgallery');
Route::get('/showgallery', [GalleryController::class, 'gshow'])->name('sgallery');
Route::post('/video/videocreate', [VideoController::class, 'videoCreate'])->name('videocreate');
Route::get('/visitor/gallery', [GalleryController::class, 'vshow'])->name('visitorgallery');
Route::get('/sponsor/gallery', [GalleryController::class, 'sshow'])->name('sponsorgallery');

Route::get('/admin',[VisitorController::class,'dshow'])->name('admindashboard');
Route::get('/admin/deletegallery/{id}',[GalleryController::class,'destory'])->name('deletegallery');


Route::get('/admin/classification',[ClassificationController::class,'classification'])->name('adminclassification');
Route::post('/admin/classificationcreate', [ClassificationController::class, 'classificationCreate'])->name('classificationcreate');
Route::get('/admin/showclassification', [ClassificationController::class, 'show'])->name('showclassification');


Route::get('/admin/addanimal',[AnimalController::class,'animal'])->name('addanimal');


Route::get('sponsor/test', [HomeController::class, 'tshow'])->name('atest');

Route::get('/animal/mammal', [AnimalController::class, 'mammal'])->name('mammal');
Route::get('/animal/bird', [AnimalController::class, 'bird'])->name('bird');
Route::get('/animal/fish', [AnimalController::class, 'fish'])->name('fish');
Route::get('/animal/reptile', [AnimalController::class, 'reptile'])->name('reptile');
Route::get('/animal/amphibian', [AnimalController::class, 'amphibian'])->name('amphibian');

Route::post('/admin/mammalcreate', [MammalController::class, 'mammalCreate'])->name('mammalcreate');
Route::post('/admin/birdcreate', [BirdController::class, 'birdCreate'])->name('birdcreate');
Route::post('/admin/fishcreate', [FishController::class, 'fishCreate'])->name('fishcreate');
Route::post('/admin/reptilecreate', [ReptileController::class, 'reptileCreate'])->name('reptilecreate');
Route::post('/admin/amphibiancreate', [AmphibianController::class, 'amphibianCreate'])->name('amphibiancreate');

Route::get('/admin/editmammal/{id}',[MammalController::class,'edit'])->name('editmammal');
Route::post('/admin/updatemammal/{id}',[MammalController::class,'update'])->name('updatemammal');
Route::get('/admin/deletemammal/{id}',[MammalController::class,'destory'])->name('deletemammal');

Route::get('/admin/editbird/{id}',[BirdController::class,'edit'])->name('editbird');
Route::post('/admin/updatebird/{id}',[BirdController::class,'update'])->name('updatebird');
Route::get('/admin/deletebird/{id}',[BirdController::class,'destory'])->name('deletebird');

Route::get('/admin/editfish/{id}',[FishController::class,'edit'])->name('editfish');
Route::post('/admin/updatefish/{id}',[FishController::class,'update'])->name('updatefish');
Route::get('/admin/deletefish/{id}',[FishController::class,'destory'])->name('deletefish');

Route::get('/admin/editreptile/{id}',[ReptileController::class,'edit'])->name('editreptile');
Route::post('/admin/updatereptile/{id}',[ReptileController::class,'update'])->name('updatereptile');
Route::get('/admin/deletereptile/{id}',[ReptileController::class,'destory'])->name('deletereptile');

Route::get('/admin/editamphibian/{id}',[AmphibianController::class,'edit'])->name('editamphibian');
Route::post('/admin/updateamphibian/{id}',[AmphibianController::class,'update'])->name('updateamphibian');
Route::get('/admin/deleteamphibian/{id}',[AmphibianController::class,'destory'])->name('deleteamphibian');



Route::get('/admin/viewanimal', [AnimalController::class, 'show'])->name('showanimal');
Route::get('/mammal', [MammalController::class, 'show'])->name('showmammal');
Route::get('/bird', [BirdController::class, 'show'])->name('showbird');
Route::get('/fish', [FishController::class, 'show'])->name('showfish');
Route::get('/reptile', [ReptileController::class, 'show'])->name('showreptile');
Route::get('/amphibian', [AmphibianController::class, 'show'])->name('showamphibian');


Route::get('/visitor/mammal', [MammalController::class, 'vshow'])->name('visitormammal');
Route::get('/visitor/bird', [BirdController::class, 'vshow'])->name('visitorbird');
Route::get('/visitor/fish', [FishController::class, 'vshow'])->name('visitorfish');
Route::get('/visitor/reptile', [ReptileController::class, 'vshow'])->name('visitorreptile');
Route::get('/visitor/amphibian', [AmphibianController::class, 'vshow'])->name('visitoramphibian');

Route::get('/sponsor/mammal', [MammalController::class, 'sshow'])->name('sponsormammal');
Route::get('/sponsor/bird', [BirdController::class, 'sshow'])->name('sponsorbird');
Route::get('/sponsor/fish', [FishController::class, 'sshow'])->name('sponsorfish');
Route::get('/sponsor/reptile', [ReptileController::class, 'sshow'])->name('sponsorreptile');
Route::get('/sponsor/amphibian', [AmphibianController::class, 'sshow'])->name('sponsoramphibian');

Route::get('/sponsor/sponsormammal/{id}', [MammalController::class, 'smshow'])->name('s_mammal');
Route::get('/sponsor/sponsorbird/{id}', [BirdController::class, 'sbshow'])->name('s_bird');
Route::get('/sponsor/sponsorfish/{id}', [FishController::class, 'sfshow'])->name('s_fish');
Route::get('/sponsor/sponsorreptile/{id}', [ReptileController::class, 'srshow'])->name('s_reptile');
Route::get('/sponsor/sponsoramphibian/{id}', [AmphibianController::class, 'sashow'])->name('s_amphibian');

Route::get('/visitor/mammalinfo/{id}', [MammalController::class, 'minfoshow'])->name('mammalinfo');
Route::get('/visitor/birdinfo/{id}', [BirdController::class, 'binfoshow'])->name('birdinfo');
Route::get('/visitor/fishinfo/{id}', [FishController::class, 'finfoshow'])->name('fishinfo');
Route::get('/visitor/reptileinfo/{id}', [ReptileController::class, 'rinfoshow'])->name('reptileinfo');
Route::get('/visitor/amphibianinfo/{id}', [AmphibianController::class, 'ainfoshow'])->name('amphibianinfo');

Route::get('/animal/sponsoranimal/{id}', [AnimalController::class, 'sponsoranimal'])->name('sponsoranimal');
Route::get('/animal/secsponsoranimal/{id}', [AnimalController::class, 'secsponsoranimal'])->name('secsponsoranimal');
Route::get('/animal/thirdsponsoranimal/{id}', [AnimalController::class, 'thirdsponsoranimal'])->name('thirdsponsoranimal');
Route::get('/animal/fourthsponsoranimal/{id}', [AnimalController::class, 'fourthsponsoranimal'])->name('fourthsponsoranimal');
Route::get('/animal/fifthsponsoranimal/{id}', [AnimalController::class, 'fifthsponsoranimal'])->name('fifthsponsoranimal');


Route::post('/sponsoranimal/{id}', [SponsoranimalController::class, 'sponsoranimalCreate'])->name('sponsoranimalcreate');
Route::get('/admin/showsponsoranimal', [SponsoranimalController::class, 'show'])->name('viewsponsoranimal');
Route::get('/admin/deletesponsoranimal/{id}',[SponsoranimalController::class,'destory'])->name('deletesponsoranimal');

Route::get('/admin/setweekanimal', [SetweekanimalController::class, 'show'])->name('showsetweekanimal');

Route::post('/admin/setmammalcreate/{id}', [SetweekanimalController::class, 'setmammalCreate'])->name('setmammalcreate');
Route::post('/admin/setbirdcreate/{id}', [SetweekanimalController::class, 'setbirdCreate'])->name('setbirdcreate');
Route::post('/admin/setfishcreate/{id}', [SetweekanimalController::class, 'setfishCreate'])->name('setfishcreate');
Route::post('/admin/setreptilecreate/{id}', [SetweekanimalController::class, 'setreptileCreate'])->name('setreptilecreate');
Route::post('/admin/setamphibiancreate/{id}', [SetweekanimalController::class, 'setamphibianCreate'])->name('setamphibiancreate');



Route::get('/admin/forgetpassword',[ForgetPasswordManager::class,'forgetPassword'])->name('forgetpassword');
Route::post('/forgetpassword',[ForgetPasswordManager::class,'forgetPasswordPost'])->name('forgetpasswordpost');
Route::get('/resetpassword/{token}',[ForgetPasswordManager::class,'resetPassword'])->name('resetpassword');

Route::post('/resetpassword',[ForgetPasswordManager::class,'resetPasswordPost'])->name('resetpasswordpost');

Route::post('/contactmessage',[HomeController::class,'contactMessagePost'])->name('contactmessagepost');

Route::get('/sendcontactmessage',[HomeController::class,'contactCreate'])->name('sendmessage');

Route::get('/admin/report/{id}', [ReportController::class, 'report'])->name('report');




