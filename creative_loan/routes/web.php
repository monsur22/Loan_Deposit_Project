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




//Admin singin and singup Area
Route::get('/admin-login', 'adminloginController@login_form');
Route::post('/admin-login', 'adminloginController@login_form_action');

// Route::get('/admin-password-reset', 'adminloginController@admin_password_reset_page');
// Route::post('/admin-password-reset', 'adminloginController@admin_password_reset');

// Route::get('/admin-reset-code', 'adminloginController@admin_reset_code');
// Route::post('/admin-reset-code', 'adminloginController@admin_reset_verify_code');

// Route::get('/admin-update-password', 'adminloginController@admin_update_password_page');
// Route::post('/admin-update-password', 'adminloginController@admin_update_password');

Route::get('/logout', 'adminloginController@logout');


///Admin Dashboard Page
Route::get('/admin-dashboard', 'HomeController@home');

// Master Setup Controller 

//Company 
Route::get('/company', 'mastersetupController@company_details');
Route::post('/company', 'mastersetupController@companyAdd');
Route::get('/company/delete/{id}', 'mastersetupController@companydelete');
Route::get('/company-info/{id}', 'mastersetupController@compviewbyid');
Route::post('/company/update', 'mastersetupController@companyupdate');

///branch
Route::get('/branch', 'mastersetupController@branch_details');
Route::post('/branch', 'mastersetupController@branch_add');
Route::get('/branchlist-info/{id}', 'mastersetupController@branch_edit');
Route::post('/branchlist-update', 'mastersetupController@branch_update');
Route::get('/branch/delete/{id}', 'mastersetupController@branch_delete');
Route::get('/branch-status/{id}',[
    'uses'=>'mastersetupController@user_status_update',
    'as'=>'user_status'
    ]);
/////user
Route::get('/user', 'mastersetupController@user_details');
Route::post('/user', 'mastersetupController@user_add');
Route::get('/user-info/{id}', 'mastersetupController@user_edit');
Route::post('/user-update', 'mastersetupController@user_update');
Route::get('/user-delete/{id}', 'mastersetupController@user_delete');
Route::get('/user-status/{id}',[
    'uses'=>'mastersetupController@branch_status_update',
    'as'=>'branch_status'
    ]);

 // customer setup Controller
Route::get('/customerlist', 'customersetupController@customer_list');
Route::post('/customerlist', 'customersetupController@customer_add');
Route::get('/customer-info/{id}', 'customersetupController@customer_edit');
Route::post('/customerlist/update', 'customersetupController@customer_update');
Route::get('/customer/delete/{id}', 'customersetupController@customer_delete');   

//supplier Setup Contorller
Route::get('/supplierlist', 'suppliersetupController@supplier_list');
Route::post('/supplierlist', 'suppliersetupController@supplier_add');
Route::get('/supplier-info/{id}', 'suppliersetupController@supplier_edit');
Route::post('/supplierlist/update', 'suppliersetupController@supplier_update');
Route::get('/supplier/delete/{id}', 'suppliersetupController@supplier_delete');

// Account setup Controller

///group
Route::get('/group', 'accountsetupController@groupdetails');
Route::post('/group', 'accountsetupController@groupadd');
Route::get('/group-info/{id}', 'accountsetupController@groupviewbyid');
Route::post('/group-update', 'accountsetupController@groupupdate');
Route::get('/group-delete/{id}', 'accountsetupController@groupdelete');
Route::get('/group-status/{id}',[
    'uses'=>'accountsetupController@group_status_update',
    'as'=>'groupstatus'
    ]);

///category
Route::get('/category', 'accountsetupController@categorydetails');
Route::post('/category', 'accountsetupController@categoryadd');
Route::get('/category-info/{id}', 'accountsetupController@catviewbyid');
Route::post('/category-update', 'accountsetupController@cat_update');
Route::get('/category-delete/{id}', 'accountsetupController@cat_delete');
Route::get('/category-status/{id}',[
    'uses'=>'accountsetupController@cat_status_update',
    'as'=>'catstatus'
    ]);


///account head 
Route::get('/accounthead', 'accountsetupController@acheaddetails');
Route::post('/accounthead-add', 'accountsetupController@achead_add');
Route::get('/accounthead-info/{id}', 'accountsetupController@achead_info');
Route::post('/accounthead-update', 'accountsetupController@achead_update');
Route::get('/accounthead-delete/{id}', 'accountsetupController@achead_delete');
Route::get('/account-head-status/{id}',[
    'uses'=>'accountsetupController@account_head_status_update',
    'as'=>'accounthead_status'
    ]);


////chart of acount
Route::get('/chart-of-account', 'accountreportController@achead_report');

//voucher Controller

//transection-voucher


// Route::get('/transection-voucher', 'voucherController@transection_voucher');
// Route::post('/transection-add', 'voucherController@transection_add');
// Route::post('/transection-edit', 'voucherController@transection_edit');
// Route::post('/transection-update', 'voucherController@transection_update');
// Route::get('/transection-delete/{id}', 'voucherController@transection_delete');
// Route::get('/showdebit_b/{id}', 'voucherController@showdebit_b');//ajax api
// Route::get('/tra_edit/{id}', 'voucherController@tra_edit');//ajax api
// Route::get('/transection-report/{id}', 'voucherController@transection_report');
// Route::get('/transection-status/{id}',[
//     'uses'=>'voucherController@t_confirm_statas',
//     'as'=>'confirm_statas'
//     ]);


Route::get('/payment-voucher', 'voucherController@payment_voucher');
Route::post('/payment-add', 'voucherController@payment_add');
Route::get('/pay-edit/{id}', 'voucherController@pay_edit');//ajax api
Route::get('/showpay/{id}', 'voucherController@showpay');//ajax api
Route::post('/payment-update', 'voucherController@payment_update');
Route::get('/payment-delete/{id}', 'voucherController@payment_delete');
Route::get('/payment-report/{id}', 'voucherController@payment_report');
Route::get('/payment-status/{id}',[
    'uses'=>'voucherController@p_confirm_statas',
    'as'=>'p_confirm_statas'
    ]);


Route::get('/collection-voucher', 'voucherController@collection_voucher');
Route::post('/collection-add', 'voucherController@collection_add');
Route::get('/collection-delete/{id}', 'voucherController@collection_deleter');
Route::get('/coll-edit/{id}', 'voucherController@coll_edit');//ajax api
Route::get('/show-col/{id}', 'voucherController@show_coll');//ajax api
Route::post('/collection-update', 'voucherController@collection_update');
Route::get('/collection-report/{id}', 'voucherController@collection_report');
Route::get('/collection-status/{id}',[
    'uses'=>'voucherController@c_confirm_statas',
    'as'=>'c_confirm_statas'
    ]);

///Expence Voucher
Route::get('/expence-voucher', 'voucherController@expence_voucher');
Route::get('/eshowdebit_b/{id}', 'voucherController@eshowdebit_b');//ajax api
Route::get('/exp_edit/{id}', 'voucherController@exp_edit');//ajax api
Route::post('/expence-add', 'voucherController@expence_voucher_add');
Route::post('/expence-update', 'voucherController@expence_voucher_update');
Route::get('/expence-delete/{id}', 'voucherController@expence_voucher_delete');
Route::get('/expence-status/{id}',[
    'uses'=>'voucherController@e_confirm_statas',
    'as'=>'econfirm_statas'
    ]);
Route::get('/expence-statement', 'statementControler@expence_statement');
Route::get('/expence-statement-report/{id}', 'statementControler@expence_statement_report');





//income Voucher
Route::get('/income-voucher', 'voucherController@income_voucher');
Route::get('/ishowdebit_b/{id}', 'voucherController@ishowdebit_b');//ajax api
Route::get('/ixp_edit/{id}', 'voucherController@ixp_edit');//ajax api
Route::post('/income-add', 'voucherController@income_add');
Route::post('/income-voucher-update', 'voucherController@income_update');
Route::get('/income-voucher-delete/{id}', 'voucherController@income_delete');
Route::get('/income-status/{id}',[
    'uses'=>'voucherController@i_confirm_statas',
    'as'=>'confirm_statas'
    ]);
Route::get('/income-statement', 'statementControler@income_statement');
Route::get('/income-statement-report/{id}', 'statementControler@income_statement_report');





//-------------------income and expense Report-------------------------
Route::get('/expense-income-report', 'statementControler@expense_income_report');



////Account Ledger
Route::get('/account-ledger','accledgerController@account_ledger');
//Route::get('/account-ledger','accledgerController@account_ledger1');
// Route::get('/account-ledger/transection-ledger','accledgerController@traledger');


Route::get('/user-login-logout-record','usersystemController@userloginoutRecord');



//=================================================user=======================================================================


Route::get('/user-login','User\userLoginController@user_login');
Route::post('/user-login','User\userLoginController@user_login_action');
Route::get('/user-logout','User\userLoginController@logout');

Route::get('/user-dashboard','User\userLoginController@userhome');

//Forget
Route::get('/For-Email','User\userLoginController@forgetEmailView');
Route::post('/For-Email/action','User\userLoginController@forgetEmail');
Route::get('/For-Token','User\userLoginController@forgetVerifyCodeView');
Route::post('/For-Token/action','User\userLoginController@forgetVerifyCode');
Route::get('/Update-Pass','User\userLoginController@forUpdatePassView');
Route::post('/Update-Pass/action','User\userLoginController@forUpdatePass');


 // user=========customer setup Controller
 Route::get('/user/customerlist', 'User\UserCustomerController@customer_list');
 Route::post('/user/customerlist', 'User\UserCustomerController@customer_add');
 Route::get('/user/customer-info/{id}', 'User\UserCustomerController@customer_edit');
 Route::post('/user/customerlist/update', 'User\UserCustomerController@customer_update');
 Route::get('/user/customer/delete/{id}', 'User\UserCustomerController@customer_delete'); 

 // user=========supplier setup Controller

Route::get('/user/supplierlist', 'User\UserSupplierController@supplier_list');
Route::post('/user/supplierlist', 'User\UserSupplierController@supplier_add');
Route::get('/user/supplier-info/{id}', 'User\UserSupplierController@supplier_edit');
Route::post('/user/supplierlist/update', 'User\UserSupplierController@supplier_update');
Route::get('/user/supplier/delete/{id}', 'User\UserSupplierController@supplier_delete');


 // user=========Voucher Controller


 ///Payment Voucher
 Route::get('/user/payment-voucher', 'User\UserVoucherController@payment_voucher');
Route::post('/user/payment-add', 'User\UserVoucherController@payment_add');
Route::get('/user/pay-edit/{id}', 'User\UserVoucherController@pay_edit');//ajax api
Route::get('/user/showpay/{id}', 'User\UserVoucherController@showpay');//ajax api
Route::post('/user/payment-update', 'User\UserVoucherController@payment_update');
Route::get('/user/payment-delete/{id}', 'User\UserVoucherController@payment_delete');
Route::get('/user/payment-report/{id}', 'User\UserVoucherController@payment_report');
Route::get('/user/payment-status/{id}',[
    'uses'=>'User\UserVoucherController@user_p_confirm_statas',
    'as'=>'user_p_confirm_statas'
    ]);


//////Collection Voucher
    Route::get('/user/collection-voucher', 'User\UserVoucherController@collection_voucher');
    Route::post('/user/collection-add', 'User\UserVoucherController@collection_add');
    Route::get('/user/collection-delete/{id}', 'User\UserVoucherController@collection_deleter');
    Route::get('/user/coll-edit/{id}', 'User\UserVoucherController@coll_edit');//ajax api
    Route::get('/user/show-col/{id}', 'User\UserVoucherController@show_coll');//ajax api
    Route::post('/user/collection-update', 'User\UserVoucherController@collection_update');
    Route::get('/user/collection-report/{id}', 'User\UserVoucherController@collection_report');
    Route::get('/user/collection-status/{id}',[
        'uses'=>'User\UserVoucherController@user_c_confirm_statas',
        'as'=>'user_c_confirm_statas'
        ]);


        ///Expence Voucher
Route::get('/user/expence-voucher', 'User\UserVoucherController@expence_voucher');
Route::get('/user/eshowdebit_b/{id}', 'User\UserVoucherController@eshowdebit_b');//ajax api
Route::get('/user/exp_edit/{id}', 'User\UserVoucherController@exp_edit');//ajax api
Route::post('/user/expence-add', 'User\UserVoucherController@expence_voucher_add');
Route::post('/user/expence-update', 'User\UserVoucherController@expence_voucher_update');
Route::get('/user/expence-delete/{id}', 'User\UserVoucherController@expence_voucher_delete');
Route::get('/user/expence-status/{id}',[
    'uses'=>'User\UserVoucherController@user_e_confirm_statas',
    'as'=>'user_e_confirm_statas'
    ]);






//income Voucher
Route::get('/user/income-voucher', 'User\UserVoucherController@income_voucher');
Route::get('/user/ishowdebit_b/{id}', 'User\UserVoucherController@ishowdebit_b');//ajax api
Route::get('/user/ixp_edit/{id}', 'User\UserVoucherController@ixp_edit');//ajax api
Route::post('/user/income-add', 'User\UserVoucherController@income_add');
Route::post('/user/income-voucher-update', 'User\UserVoucherController@income_update');
Route::get('/user/income-voucher-delete/{id}', 'User\UserVoucherController@income_delete');
Route::get('/user/income-status/{id}',[
    'uses'=>'User\UserVoucherController@user_i_confirm_statas',
    'as'=>'user_i_confirm_statas'
    ]);



Route::get('/user/chart-of-account', 'User\UserAccountReportController@achead_report');
Route::get('/user/account-ledger','User\UserAccountReportController@account_ledger');
Route::get('/user/income-statement', 'User\UserAccountReportController@income_statement');
Route::get('/user/income-statement-report/{id}', 'User\UserAccountReportController@income_statement_report');
Route::get('/user/expence-statement', 'User\UserAccountReportController@expence_statement');
Route::get('/user/expence-statement-report/{id}', 'User\UserAccountReportController@expence_statement_report');
Route::get('/user/expense-income-report', 'User\UserAccountReportController@expense_income_report');



//***************************************Creative Loan  Start From Here **********************************

//===================Member Registration  =====================

Route::get('/create-member', 'RegistrationController@member_form');
Route::post('/create-member', 'RegistrationController@add_member');
Route::get('/manage-member','RegistrationController@manage_member');
Route::get('/edit-member/{id}','RegistrationController@member_edit');
Route::post('/update-member-details','RegistrationController@member_details_update');
Route::get('/regi-member/delete/{id}','RegistrationController@regi_member_delet');
Route::get('/regi-member-details/view/{id}','RegistrationController@regi_member_delet_view');
Route::get('/registration-member-status/{id}',[
    'uses'=>'RegistrationController@member_status_update',
    'as'=>'member_status_update'
    ]);
// ===============Loan Pakage===============
Route::get('/loan-pakage', 'LoanpackageController@loan_add_page');
Route::post('/loan-pakage', 'LoanpackageController@loan_add');
Route::get('/edit-loan-pakage', 'LoanpackageController@l_edit_laon_pakage')->name('edit_loan');
Route::post('/update-loan-pakage', 'LoanpackageController@update_laon_pakage');
Route::get('/delete-loan-pakage/{id}', 'LoanpackageController@delete_laon_pakage');
Route::get('/loan-status/{id}',[
    'uses'=>'LoanpackageController@loan_status_update',
    'as'=>'loan_status'
    ]);

//=========================== Deposit   pacake================/

Route::get('/deposit-package', 'DepositpacakeController@index');
Route::post('/deposit-package', 'DepositpacakeController@add_deposit_pakage');
Route::get('/edit-deposit-package', 'DepositpacakeController@d_edit_deposit_pakage')->name('edit_deposit');
Route::post('/update-deposit-package', 'DepositpacakeController@update_deposit_pakage');
Route::get('/delete-deposit-package/{id}', 'DepositpacakeController@delete_deposit_pakage');
Route::get('/deposit-status/{id}',[
    'uses'=>'DepositpacakeController@deposit_status_update',
    'as'=>'deposit_status'
    ]);

    //=========================== share   pacake================/

Route::get('/share-package', 'sharepakageController@index');
Route::post('/share-package', 'sharepakageController@add_share_pakage');
Route::get('/edit-share-package', 'sharepakageController@s_edit_share_pakage')->name('edit_share');
Route::post('/update-share-package', 'sharepakageController@update_share_pakage');
Route::get('/delete-share-package/{id}', 'sharepakageController@delete_share_pakage');
Route::get('/share-status/{id}',[
    'uses'=>'sharepakageController@share_status_update',
    'as'=>'share_status'
    ]);

//=========================== Depositor ================/
Route::get('/depositor-add', 'dipositorContorller@add_dipositor');
Route::post('/depositor-add', 'dipositorContorller@add_dipositor_action');
Route::get('/depositor-edit/{id}', 'dipositorContorller@depositor_edit');//ajax api
Route::post('/depositor-update', 'dipositorContorller@depositor_update');
Route::get('/depositor-delete/{id}', 'dipositorContorller@depositor_delete');
Route::get('/depositor/{id}', 'dipositorContorller@depositor');//ajax api



Route::get('/deposit-active-status/{id}',[
    'uses'=>'dipositorContorller@deposit_active_statas',
    'as'=>'deposit_active_statas'
    ]);
//=========================== Loan ================/
Route::get('/loan-add', 'loanController@add_loan');
Route::post('/loan-add', 'loanController@add_loan_action');
Route::get('/loan-edit/{id}', 'loanController@loan_edit');//ajax api
Route::post('/loan-update', 'loanController@loan_update');
Route::get('/loan-delete/{id}', 'loanController@loan_delete');
Route::get('/loan/{id}', 'loanController@loan');//ajax api

Route::get('/loan-active-status/{id}',[
    'uses'=>'loanController@loan_active_statas',
    'as'=>'loan_active_statas'
    ]);





//============================Collection====================
//////loan collection
 Route::get('/loan-collection','collectionController@loan_collecttion');
 Route::post('/loan-collection','collectionController@loan_collecttion_add');
 Route::get('/loan-collection/edit/{id}','collectionController@loan_collecttion_edit');
 Route::post('/loan-collection/update','collectionController@loan_collecttion_update');
 Route::get('/loan-collection/delete/{id}','collectionController@loan_collecttion_delete');
 Route::get('/loan-collection/report/{id}','collectionController@loan_collecttion_report');
 Route::get('/loan-collection-status/{id}',[
    'uses'=>'collectionController@loan_collection_statas',
    'as'=>'loan_collection_statas'
    ]);
Route::get('/loan-details/{id}', 'collectionController@loan_details');//ajax api
Route::get('/loan-collection-report','collectionController@loan_report_by_collection');


//Route::get('/loan-add-filed/{id}', 'collectionController@loan_add_filleble');//ajax api

//  Route::get('/test','collectionController@test');

//share collection
Route::get('/share-collection','collectionController@share_collecttion');
Route::post('/share-collection','collectionController@share_collecttion_add');
Route::get('/share-collection/edit/{id}','collectionController@share_collecttion_edit');
Route::post('/share-collection/update','collectionController@share_collecttion_update');
Route::get('/share-collection/delete/{id}','collectionController@share_collecttion_delete');
 Route::get('/share-collection/report/{id}','collectionController@share_collecttion_report');
 Route::get('/share-details/{id}', 'collectionController@share_details');//ajax api
 Route::get('/share-collection-report', 'collectionController@share_report_by_collection');

Route::get('/share-collection-status/{id}',[
   'uses'=>'collectionController@share_collection_statas',
   'as'=>'share_collection_statas'
   ]);
// deposit collection
Route::get('/deposit-collection','collectionController@deposit_collection');
Route::post('/deposit-collection','collectionController@deposit_collection_add');
Route::get('/deposit-collection/edit/{id}','collectionController@deposit_collecttion_edit');
Route::post('/deposit-collection/update','collectionController@deposit_collecttion_update');
Route::get('/deposit-collection/delete/{id}','collectionController@deposit_collecttion_delete');
Route::get('/deposit-collection/report/{id}','collectionController@deposit_collecttion_report');
Route::get('/deposit-details/{id}', 'collectionController@deposit_details');//ajax api

 Route::get('/deposit-collection-status/{id}',[
    'uses'=>'collectionController@deposit_collection_statas',
    'as'=>'deposit_collection_statas'
    ]);
Route::get('/deposit-collection-report','collectionController@deposit_report_by_collection');

//===================================wihtdraw=================================

/***********Share withdraw *************/
Route::get('/share-withdraw','withdrawController@share_withdraw');
Route::post('/share-withdraw','withdrawController@share_withdraw_add');
Route::get('/share-withdraw/edit/{id}','withdrawController@share_withdraw_edit');
Route::post('/share-withdraw/update','withdrawController@share_withdraw_update');
Route::get('/share-withdraw/delete/{id}','withdrawController@share_withdraw_delete');
Route::get('/share-withdraw/report/{id}','withdrawController@share_withdraw_report');
Route::get('/share-withdraw/{id}', 'collectionController@share_withdraw_details');//ajax api
Route::get('/share-withdraw-report', 'withdrawController@share_report_by_withdraw');

Route::get('/share-withdraw-status/{id}',[
   'uses'=>'withdrawController@share_withdraw_statas',
   'as'=>'share_withdraw_statas'
   ]);

/***********Diposit withdraw *************/
Route::get('/diposit-withdraw','withdrawController@deposit_withdraw');
Route::post('/diposit-withdraw','withdrawController@deposit_withdraw_add');
Route::get('/diposit-withdraw/edit/{id}','withdrawController@deposit_withdraw_edit');
Route::post('/diposit-withdraw/update','withdrawController@deposit_withdraw_update');
Route::get('/diposit-withdraw/delete/{id}','withdrawController@deposit_withdraw_delete');
Route::get('/diposit-withdraw/report/{id}','withdrawController@diposit_withdraw_report');
Route::get('/diposit-withdraw/{id}', 'collectionController@deposit_withdraw_details');//ajax api
Route::get('/diposit-withdraw-report', 'withdrawController@deposit_report_by_withdraw');

Route::get('/diposit-withdraw-status/{id}',[
   'uses'=>'withdrawController@deposit_withdraw_statas',
   'as'=>'deposit_withdraw_statas'
   ]);


   //////////ledger Report
Route::get('/deposit-loan-share/ledger-report', 'withdrawController@collection_withdraw_report');



//**********************************Prduct Mangement************************************************** */

////category 
Route::get('/category-setup',['uses'=>'ProductMnangeCategoryController@index','as'=>'categorystup']);
Route::post('/category-add',['uses'=>'ProductMnangeCategoryController@postcategory','as'=>'addcategroy']);
Route::get('/category-status/{id}/status',['uses'=>'ProductMnangeCategoryController@statusupdate','as'=>'categorystatus']);
Route::get('/category-update/{id}/category',['uses'=>'ProductMnangeCategoryController@categoryupdateform','as'=>'categoryedit']);
Route::post('/category-update/action',['uses'=>'ProductMnangeCategoryController@updatecategory','as'=>'updatecategory']);
Route::get('/category-delete/{id}',['uses'=>'ProductMnangeCategoryController@deletecategory','as'=>'categorydelete']);

///Brand setup

Route::get('/barnd-setup',['uses'=>'ProductbrandController@index','as'=>'brandsetup']);
Route::post('/brand-add',['uses'=>'ProductbrandController@addbrand','as'=>'addbrand']);
Route::get('/brand-status/{id}/active-inactin',['uses'=>'ProductbrandController@updatestatus','as'=>'status']);
Route::get('/brand-edit-form/{id}/brand-edit',['uses'=>'ProductbrandController@editbrand','as'=>'brandedit']);
Route::post('/band-update/',['uses'=>'ProductbrandController@updatebrand','as'=>'updatebrand']);
Route::get('/brand-delete/{id}/delete',['uses'=>'ProductbrandController@deletebrand','as'=>'deletebrand']);

//Product Color
Route::get('/group-setup',['uses'=>'ProductcolorController@index','as'=>'groupsetup']);
Route::post('/group-add',['uses'=>'ProductcolorController@addgroup','as'=>'groupadd']);
Route::get('/group-status/{id}/status',['uses'=>'ProductcolorController@status','as'=>'gstatus']);
Route::get('/group-update/{id}/edit',['uses'=>'ProductcolorController@groupeditform','as'=>'editegroup']);
Route::post('/group-update-main',['uses'=>'ProductcolorController@updategroupthis','as'=>'updategroupas']);
Route::get('/gropu-delete/{id}',['uses'=>'ProductcolorController@deletegroup','as'=>'deletegroup']);
 
///size

Route::get('/size-setup','ProductsizeController@index')->name('sizesetup');
Route::post('/save-size','ProductsizeController@saveSize')->name('save-size');
Route::get('/size-status/{id}/status','ProductsizeController@statusUpdate')->name('sizestatus');
Route::get('/size-edit/{id}/size','ProductsizeController@sizeEdit')->name('size-edit');
Route::post('/update-size/action','ProductsizeController@sizeUpdate')->name('updateSize');
Route::get('/size-delete/{id}','ProductsizeController@deletesize')->name('sizedelete');

//product Item
Route::get('/productItem','ItemproductController@index')->name('productItem');
Route::post('/Item/itemadd','ItemproductController@storeItem')->name('additems');

Route::get('/Item/itemedit','ItemproductController@editItem')->name('edititems');
Route::post('/Item/itemupdate','ItemproductController@updateItem')->name('updateitems');

Route::get('/Item/item/edit/{id}','ItemproductController@edit_item')->name('edit_item');
Route::post('/Item/item/update','ItemproductController@update_item')->name('update_item');

Route::post('/item/delete', 'ItemproductController@destroy');

Route::post('item/import','ItemproductController@saveExcelData')->name('importExcelData');
Route::get('/downloadExcel/xlsx','ItemproductController@downloadExcel');

// **************************************************Purches Management********************************
//local Purches
//Route::get('/local-purchase','purchesmanagementController@local_purches');
Route::get('/local-purchase', 'purchesmanagementController@Local_purchaselist')->name('local-purchase');
Route::post('/destroyCart','purchesmanagementController@destroyPurchaseReturnCart')->name('destroyPurchaseReturnCart');
Route::get('/save-Purchase-Invoice','purchesmanagementController@savePurchaseInvoice')->name('savePurchaseInvoice');
Route::post('/save-purchase-item','purchesmanagementController@confirmPurchase')->name('local-purchase-save');


//purches Return 
Route::get('/return-purchases', 'purchesmanagementController@Return_purchaselist')->name('return-purchases');
Route::get('/purchace-customerInvoice-search', 'purchesmanagementController@customerInvoice')->name('customerInvoice');
Route::get('/purchace-supplierInvoice-search', 'purchesmanagementController@supplierInvoice')->name('supplierInvoice');
Route::post('/return-purchase/purchaseConfirm','purchesmanagementController@confirmPurchaseReturn')->name('confirmPurchaseReturn');
Route::post('/return-purchases/AddToCart','purchesmanagementController@updatePurchaseReturn')->name('updatePurchaseReturn');
Route::post('/return-purchases/destroyCart','purchesmanagementController@destroyPurchaseReturnCart')->name('destroyPurchaseReturnCart');
Route::post('/return-purchases/removeCartItem','purchesmanagementController@removePurchaseReturnCartItem')->name('removePurchaseReturnCartItem');
Route::get('/return-purchases/editPurchaseData','purchesmanagementController@getEditPurchaseData')->name('getEditPurchaseData');

// Product Sales
Route::get('/product-sale/',['uses'=>'productsale@index','as'=>'productsale']);
Route::post('/product-sale/fetch',['uses'=>'productsale@fetch','as'=>'autocomplete.fetch']);
Route::get('/product-sale/info', 'productsale@findCustomer')->name('findCustomer');
Route::post('/Search/Products/','productsale@searchProducts')->name('searchingdata');
Route::get('/Cart/Delete/{storid}','productsale@getRemoveItem')->name('product.delete');
Route::get('/Cart/Clean','productsale@cleanCart')->name('sessions');
Route::post('/Sales/InvoiceAdd','productsale@addSaleInvoice')->name('addSaleInvoice');

//Return Sales item
Route::get('/Product/SaleReturn','productsale@productSaleReturn')->name('productsaleReturn');
Route::get('/Product/SaleReturn/Filter/Customer/Invoice','productsale@FilterCustomerInvoice')->name('FilterCustomerInvoice');
Route::get('/Product/SaleReturn/EditData','productsale@getEditData')->name('getEditData');
Route::post('/Product/UpdateReturn','productsale@updateReturn')->name('updateReturn');
Route::post('/Product/Confirm/SalesReturn','productsale@confirmSalesReturn')->name('confirmSalesReturn');
//----------- Destroy Sales return Cart-------------------------------------

Route::post('/product/SalesReturn/destroy','productsale@destroyCart')->name('destroySalesReturnCart');
Route::post('/product/salesReturn/remove','productsale@removeItem')->name('removeItem');


//Purches Report

// Route::get('/expence-statement', 'statementControler@expence_statement');
// Route::get('/expence-statement-report/{id}', 'statementControler@expence_statement_report');

Route::get('/purches-reoprt', 'purchesmanagementController@purches_reoprt');
Route::get('/purches-reoprt-by-Id/{invoice}', 'purchesmanagementController@purches_reoprt_by_id');
Route::get('/purches-return-reoprt', 'purchesmanagementController@purches_return_reoprt');
Route::get('/purches-return-reoprt-by-Id/{invoice}', 'purchesmanagementController@purches_return_reoprt_by_id');

// Product Sale Rport

Route::get('/sales/dateWisereport','productsale@salesdateWiseReport')->name('dateWiseReport');
Route::get('/sales/invoice/info/{invoice}','productsale@salesinvoiceInfo')->name('invoiceInfo');

//sale purches return
Route::get('/sales-return/report','productsale@sales_return_report')->name('salesReturnReport');
Route::get('/sales-return-report-by-id/{invoice}','productsale@sales_return_report_by_id')->name('returnSalesInvoiceInfo');

//stock Report
Route::get('/stock-report','purchesmanagementController@stock_report');
//testing add cart
// Route::get('/test-page-load', 'testController@loadpage');
// Route::post('/test-page-load', 'testController@loadpage_add_cart');
// Route::get('/show-cart', 'testController@showcart');
// Route::get('/product-sale/',['uses'=>'testController@index','as'=>'productsale']);

