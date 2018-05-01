<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::group( ['middleware' => ['auth']], function() {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('permissions', 'Backend\PermissionController');
    Route::resource('posts', 'PostController');

    Route::resource('companies', 'CompanyController');

    Route::get('companies-edit/{company}', 'CompanyController@company_edit'); 

	Route::resource('complexes', 'ComplexController');

	Route::get('complexes-edit/{complex}', 'ComplexController@complex_edit'); 

	Route::resource('shops', 'ShopController');

	Route::get('getshopDrop/{id}', 'ShopController@getshopDrop');

	Route::get('shops-edit/{shop}', 'ShopController@shop_edit');

	Route::resource('shopbooks', 'ShopBookingController');

	Route::get('getDropCompbook/{id}', 'ShopBookingController@getDropCompbook');

	Route::get('getDropShopbook/{id}', 'ShopBookingController@getDropShopbook');

	Route::get('getRentCal/{id}', 'ShopBookingController@getRentCal');
	
	Route::resource('tenants', 'TenantController');

	Route::get('tenants-edit/{tenant}', 'TenantController@tenant_edit');

	Route::get('tprofile/{id}', 'TenantController@getProfile');
	
	Route::post('postProfile', 'TenantController@postProfile');
	
	Route::get('bill-details/{id}', 'TenantController@getBillDetails');

	Route::resource('rentcollects', 'RentcollectController');

	Route::get('getDropComplex/{id}', 'RentcollectController@getDropComplex');

	Route::get('getDropShop/{id}', 'RentcollectController@getDropShop');

	Route::get('getDropShoptenant/{id}', 'RentcollectController@getDropShoptenant');

	Route::get('getDropTenant/{id}', 'RentcollectController@getDropTenant');

	Route::resource('banks', 'BankController');

	Route::get('banks-edit/{bank}', 'BankController@bank_edit');

	Route::get('transactions', 'BankController@createTransaction');

	Route::resource('employees', 'EmployeeController');

	Route::get('employee-edit/{employee}', 'EmployeeController@employee_edit');

	Route::resource('categories', 'CategoryController');

	Route::get('categories-edit/{category}', 'CategoryController@category_edit');

	Route::resource('expenses', 'ExpenseController');

	Route::get('expenses-edit/{expense}', 'ExpenseController@expense_edit');

	Route::get('viewExpense/{date}', 'ExpenseController@viewExpense');

	Route::resource('billpays', 'BillpayController');
	
	Route::resource('acrents', 'AcrentController');

	Route::get('acrent-report', 'AcrentController@getAcrentReport');

	Route::post('acrent-report', 'AcrentController@postAcrentReport');

	//Report and billgenerate route 

	Route::get('billgenerate', 'ReportController@getBillgenerate');

	Route::get('company-report', 'ReportController@getCompanyReport');

	Route::post('company-report', 'ReportController@postCompanyReport');

	Route::get('complex-report', 'ReportController@getComplexReport');

	Route::get('getcomplexReportshow/{id}', 'ReportController@getcomplexReportshow');

	Route::post('complex-report', 'ReportController@postComplexReport');

	Route::get('rentcollect-report', 'ReportController@getRentCollect');

	Route::get('getrentReportshow/{id}', 'ReportController@getrentReportshow');

	Route::get('/getrentDate', 'ReportController@getrentDate');

	Route::post('rentcollect-report', 'ReportController@postRentCollect');

	Route::get('utility-report', 'ReportController@getUtilityReport');

	Route::get('getutidropReport/{id}', 'ReportController@getutidropReport');

	Route::post('utility-report', 'ReportController@postUtilityReport');
	
	Route::get('tenant-report', 'ReportController@getTenantReport');

	Route::post('tenant-report', 'ReportController@postTenantReport');

	Route::post('tenant-due-complex', 'ReportController@postComplexDue');

	Route::get('tenant-due-report', 'ReportController@getTenantDue');

	Route::post('tenant-due-report', 'ReportController@postTenantDue');

	Route::get('getTenantDuedrop/{id}', 'ReportController@getTenantDuedrop');

	Route::get('bank-report', 'ReportController@getBankReport');

	Route::get('expense-report', 'ReportController@getExpenseReport');

	Route::get('getexptRepor/{id}', 'ReportController@getexptRepor');

	Route::get('getexptReporcat/{id}', 'ReportController@getexptReporcat');

	Route::post('expense-report', 'ReportController@postExpenseReport');

	Route::get('in-out-report', 'ReportController@getInoutReport');

	Route::post('in-out-report', 'ReportController@postInoutReport');

	Route::get('final-report', 'ReportController@getFinalReport');

	Route::post('final-report', 'ReportController@postFinalReport');

});
