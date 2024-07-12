<?php

namespace Database\Seeders\System;

use App\Models\Module;
use App\Models\SubModule;
use Illuminate\Database\Seeder;

class SubModuleSeeder extends Seeder
{
public function run(): void
{
    // Modules
    $generalModule = Module::where('code', 'G')->first();
    $humanResourcesModule = Module::where('code', 'HR')->first();
    $financeModule = Module::where('code', 'FIN')->first();
    $inventoryModule = Module::where('code', 'INV')->first();
    $projectModule = Module::where('code', 'PRJ')->first();
    $contractsModule = Module::where('code', 'CON')->first();

    // General Module Sub-Modules
    $world = SubModule::create([
        'name' => 'world',
        'code' => $generalModule->code . '-WO',
        'short' => $generalModule->short . '.world',
        'path' => $generalModule->path . '/world',
        'model' => 'App\Models\General\World',
        'view' => null,
        'controller' => null,
        'module_id' => $generalModule->id,
    ]);

    $system = SubModule::create([
        'name' => 'system',
        'code' => $generalModule->code . '-SY',
        'short' => $generalModule->short . '.system',
        'path' => $generalModule->path . '/system',
        'model' => 'App\Models\General\System',
        'view' => null,
        'controller' => null,
        'module_id' => $generalModule->id,
    ]);

    // Human Resource Module Sub-Modules
    $employeeRecords = SubModule::create([
        'name' => 'employee records',
        'code' => $humanResourcesModule->code . '-ER',
        'short' => $humanResourcesModule->short . '.employee-records',
        'path' => $humanResourcesModule->path . '/employee-records',
        'model' => 'App\Models\HumanResources\EmployeeRecords',
        'view' => null,
        'controller' => null,
        'module_id' => $humanResourcesModule->id,
    ]);

    $payroll = SubModule::create([
        'name' => 'payroll',
        'code' => $humanResourcesModule->code . '-PR',
        'short' => $humanResourcesModule->short . '.payroll',
        'path' => $humanResourcesModule->path . '/payroll',
        'model' => 'App\Models\HumanResources\Payroll',
        'view' => null,
        'controller' => null,
        'module_id' => $humanResourcesModule->id,
    ]);

    $attendanceTracking = SubModule::create([
        'name' => 'attendance tracking',
        'code' => $humanResourcesModule->code . '-AT',
        'short' => $humanResourcesModule->short . '.attendance-tracking',
        'path' => $humanResourcesModule->path . '/attendance-tracking',
        'model' => 'App\Models\HumanResources\AttendanceTracking',
        'view' => null,
        'controller' => null,
        'module_id' => $humanResourcesModule->id,
    ]);

    $multiOrganization = SubModule::create([
        'name' => 'multi organization',
        'code' => $humanResourcesModule->code . '-MO',
        'short' => $humanResourcesModule->short . '.multi-organization',
        'path' => $humanResourcesModule->path . '/multi-organization',
        'model' => 'App\Models\HumanResources\MultiOrganization',
        'view' => null,
        'controller' => null,
        'module_id' => $humanResourcesModule->id,
    ]);

    // Finance Module Sub-Modules
    $generalLedger = SubModule::create([
        'name' => 'general ledger',
        'code' => $financeModule->code . '-GL',
        'short' => $financeModule->short . '.general-ledger',
        'path' => $financeModule->path . '/general-ledger',
        'model' => 'App\Models\Finance\GeneralLedger',
        'view' => null,
        'controller' => null,
        'module_id' => $financeModule->id,
    ]);

    $accountsPayable = SubModule::create([
        'name' => 'accounts payable',
        'code' => $financeModule->code . '-AP',
        'short' => $financeModule->short . '.accounts-payable',
        'path' => $financeModule->path . '/accounts-payable',
        'model' => 'App\Models\Finance\AccountsPayable',
        'view' => null,
        'controller' => null,
        'module_id' => $financeModule->id,
    ]);

    $accountsReceivable = SubModule::create([
        'name' => 'accounts receivable',
        'code' => $financeModule->code . '-AR',
        'short' => $financeModule->short . '.accounts-receivable',
        'path' => $financeModule->path . '/accounts-receivable',
        'model' => 'App\Models\Finance\AccountsReceivable',
        'view' => null,
        'controller' => null,
        'module_id' => $financeModule->id,
    ]);

    $cash = SubModule::create([
        'name' => 'cash',
        'code' => $financeModule->code . '-CA',
        'short' => $financeModule->short . '.cash',
        'path' => $financeModule->path . '/cash',
        'model' => 'App\Models\Finance\Cash',
        'view' => null,
        'controller' => null,
        'module_id' => $financeModule->id,
    ]);

    $financeSources = SubModule::create([
        'name' => 'finance sources',
        'code' => $financeModule->code . '-FS',
        'short' => $financeModule->short . '.finance-sources',
        'path' => $financeModule->path . '/finance-sources',
        'model' => 'App\Models\Finance\FinanceSources',
        'view' => null,
        'controller' => null,
        'module_id' => $financeModule->id,
    ]);

    $costCenters = SubModule::create([
        'name' => 'cost centers',
        'code' => $financeModule->code . '-CC',
        'short' => $financeModule->short . '.cost-centers',
        'path' => $financeModule->path . '/cost-centers',
        'model' => 'App\Models\Finance\CostCenters',
        'view' => null,
        'controller' => null,
        'module_id' => $financeModule->id,
    ]);

    $vatAndTax = SubModule::create([
        'name' => 'vat and tax',
        'code' => $financeModule->code . '-VT',
        'short' => $financeModule->short . '.vat-and-tax',
        'path' => $financeModule->path . '/vat-and-tax',
        'model' => 'App\Models\Finance\VatAndTax',
        'view' => null,
        'controller' => null,
        'module_id' => $financeModule->id,
    ]);

    $forecasting = SubModule::create([
        'name' => 'forecasting',
        'code' => $financeModule->code . '-FO',
        'short' => $financeModule->short . '.forecasting',
        'path' => $financeModule->path . '/forecasting',
        'model' => 'App\Models\Finance\Forecasting',
        'view' => null,
        'controller' => null,
        'module_id' => $financeModule->id,
    ]);

    // Inventory Module Sub-Modules
    $items = SubModule::create([
        'name' => 'items',
        'code' => $inventoryModule->code . '-IT',
        'short' => $inventoryModule->short . '.items',
        'path' => $inventoryModule->path . '/items',
        'model' => 'App\Models\Inventory\Items',
        'view' => null,
        'controller' => null,
        'module_id' => $inventoryModule->id,
    ]);

    $stores = SubModule::create([
        'name' => 'stores',
        'code' => $inventoryModule->code . '-ST',
        'short' => $inventoryModule->short . '.stores',
        'path' => $inventoryModule->path . '/stores',
        'model' => 'App\Models\Inventory\Stores',
        'view' => null,
        'controller' => null,
        'module_id' => $inventoryModule->id,
    ]);

    // Project Module Sub-Modules
    $study = SubModule::create([
        'name' => 'study',
        'code' => $projectModule->code . '-ST',
        'short' => $projectModule->short . '.study',
        'path' => $projectModule->path . '/study',
        'model' => 'App\Models\Project\Study',
        'view' => null,
        'controller' => null,
        'module_id' => $projectModule->id,
    ]);

    $operations = SubModule::create([
        'name' => 'operations',
        'code' => $projectModule->code . '-OP',
        'short' => $projectModule->short . '.operations',
        'path' => $projectModule->path . '/operations',
        'model' => 'App\Models\Project\Operations',
        'view' => null,
        'controller' => null,
        'module_id' => $projectModule->id,
    ]);

    // Contracts Module Sub-Modules
    $contracts = SubModule::create([
        'name' => 'contracts',
        'code' => $contractsModule->code . '-CO',
        'short' => $contractsModule->short . '.contracts',
        'path' => $contractsModule->path . '/contracts',
        'model' => 'App\Models\Contracts\Contracts',
        'view' => null,
        'controller' => null,
        'module_id' => $contractsModule->id,
    ]);

    $purchaseOrders = SubModule::create([
        'name' => 'purchase orders',
        'code' => $contractsModule->code . '-PO',
        'short' => $contractsModule->short . '.purchase-orders',
        'path' => $contractsModule->path . '/purchase-orders',
        'model' => 'App\Models\Contracts\PurchaseOrders',
        'view' => null,
        'controller' => null,
        'module_id' => $contractsModule->id,
    ]);

    $paymentTerms = SubModule::create([
        'name' => 'payment terms',
        'code' => $contractsModule->code . '-PT',
        'short' => $contractsModule->short . '.payment-terms',
        'path' => $contractsModule->path . '/payment-terms',
        'model' => 'App\Models\Contracts\PaymentTerms',
        'view' => null,
        'controller' => null,
        'module_id' => $contractsModule->id,
    ]);
}}
