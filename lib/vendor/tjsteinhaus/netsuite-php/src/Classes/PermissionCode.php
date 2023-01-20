<?php
/**
 * This file is part of the netsuitephp/netsuite-php library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/netsuitephp/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/netsuitephp/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 */

namespace NetSuite\Classes;

class PermissionCode {
    static $paramtypesmap = array(
    );
    const _accessPaymentAuditLog = "_accessPaymentAuditLog";
    const _accessTokenManagement = "_accessTokenManagement";
    const _accountDetail = "_accountDetail";
    const _accounting = "_accounting";
    const _accountingBook = "_accountingBook";
    const _accountingLists = "_accountingLists";
    const _accounts = "_accounts";
    const _accountsPayable = "_accountsPayable";
    const _accountsPayableGraphing = "_accountsPayableGraphing";
    const _accountsPayableRegister = "_accountsPayableRegister";
    const _accountsReceivable = "_accountsReceivable";
    const _accountsReceivableGraphing = "_accountsReceivableGraphing";
    const _accountsReceivableRegister = "_accountsReceivableRegister";
    const _accountsReceivableUnbilled = "_accountsReceivableUnbilled";
    const _address = "_address";
    const _adjustInventory = "_adjustInventory";
    const _adjustInventoryWorksheet = "_adjustInventoryWorksheet";
    const _admindocs = "_admindocs";
    const _admindocsEu = "_admindocsEu";
    const _admindocsNa = "_admindocsNa";
    const _admindocsOther = "_admindocsOther";
    const _adpImportData = "_adpImportData";
    const _adpSetup = "_adpSetup";
    const _advancedAnalytics = "_advancedAnalytics";
    const _advancedGovernmentIssuedIds = "_advancedGovernmentIssuedIds";
    const _advancedOrderManagement = "_advancedOrderManagement";
    const _advancedPDFHTMLTemplates = "_advancedPDFHTMLTemplates";
    const _allocateOrders = "_allocateOrders";
    const _allocationSchedules = "_allocationSchedules";
    const _allowJsHtmlUploads = "_allowJsHtmlUploads";
    const _allowNonGLChanges = "_allowNonGLChanges";
    const _allowPendingBookJournalEntry = "_allowPendingBookJournalEntry";
    const _amendW4 = "_amendW4";
    const _amortizationReports = "_amortizationReports";
    const _amortizationSchedules = "_amortizationSchedules";
    const _analyticsAdministrator = "_analyticsAdministrator";
    const _applicationPublishers = "_applicationPublishers";
    const _approveDirectDeposit = "_approveDirectDeposit";
    const _approveEFT = "_approveEFT";
    const _approveOnlineBillPayments = "_approveOnlineBillPayments";
    const _approveVendorPayments = "_approveVendorPayments";
    const _auditTrail = "_auditTrail";
    const _automatedCashApplication = "_automatedCashApplication";
    const _backupYourData = "_backupYourData";
    const _balanceLocationCostingGroupAccounts = "_balanceLocationCostingGroupAccounts";
    const _balanceOverview = "_balanceOverview";
    const _balanceSheet = "_balanceSheet";
    const _balanceTransactionsBySegments = "_balanceTransactionsBySegments";
    const _balancingJournals = "_balancingJournals";
    const _bankAccountRegisters = "_bankAccountRegisters";
    const _bankConnectivityPlugInConfiguration = "_bankConnectivityPlugInConfiguration";
    const _basicGovernmentIssuedIds = "_basicGovernmentIssuedIds";
    const _billInboundShipment = "_billInboundShipment";
    const _billingInformation = "_billingInformation";
    const _billingSchedules = "_billingSchedules";
    const _billOfDistribution = "_billOfDistribution";
    const _billOfMaterials = "_billOfMaterials";
    const _billOfMaterialsInquiry = "_billOfMaterialsInquiry";
    const _billPurchaseOrders = "_billPurchaseOrders";
    const _bills = "_bills";
    const _billSalesOrders = "_billSalesOrders";
    const _bins = "_bins";
    const _binTransfer = "_binTransfer";
    const _binWorksheet = "_binWorksheet";
    const _blanketPurchaseOrder = "_blanketPurchaseOrder";
    const _blanketPurchaseOrderApproval = "_blanketPurchaseOrderApproval";
    const _bonus = "_bonus";
    const _bonusTypes = "_bonusTypes";
    const _budget = "_budget";
    const _buildAssemblies = "_buildAssemblies";
    const _buildWorkOrders = "_buildWorkOrders";
    const _bulkTimeEntryModification = "_bulkTimeEntryModification";
    const _calculateTime = "_calculateTime";
    const _calendar = "_calendar";
    const _campaignHistory = "_campaignHistory";
    const _cardholderAuthentication = "_cardholderAuthentication";
    const _cardholderAuthenticationEvent = "_cardholderAuthenticationEvent";
    const _cardholderAuthenticationEvents = "_cardholderAuthenticationEvents";
    const _cardholderAuthentications = "_cardholderAuthentications";
    const _caseAlerts = "_caseAlerts";
    const _cases = "_cases";
    const _cashFlowStatement = "_cashFlowStatement";
    const _cashSale = "_cashSale";
    const _cashSaleRefund = "_cashSaleRefund";
    const _certificateAccess = "_certificateAccess";
    const _certificateManagement = "_certificateManagement";
    const _changeEmailOrPassword = "_changeEmailOrPassword";
    const _changeRole = "_changeRole";
    const _chargeRule = "_chargeRule";
    const _chargeRunRules = "_chargeRunRules";
    const _check = "_check";
    const _checkItemAvailability = "_checkItemAvailability";
    const _classes = "_classes";
    const _classMapping = "_classMapping";
    const _closeAccount = "_closeAccount";
    const _closeWorkOrders = "_closeWorkOrders";
    const _colorThemes = "_colorThemes";
    const _commerceCategories = "_commerceCategories";
    const _commissionFeatureSetup = "_commissionFeatureSetup";
    const _commissionReports = "_commissionReports";
    const _commitOrders = "_commitOrders";
    const _commitPayroll = "_commitPayroll";
    const _companies = "_companies";
    const _companyInformation = "_companyInformation";
    const _competitors = "_competitors";
    const _componentWhereUsed = "_componentWhereUsed";
    const _contactRoles = "_contactRoles";
    const _contacts = "_contacts";
    const _controlSuitescriptAndWorkflowTriggersInWebServicesRequest = "_controlSuitescriptAndWorkflowTriggersInWebServicesRequest";
    const _controlSuitescriptAndWorkflowTriggersPerCsvImport = "_controlSuitescriptAndWorkflowTriggersPerCsvImport";
    const _convertClassesToDepartments = "_convertClassesToDepartments";
    const _convertClassesToLocations = "_convertClassesToLocations";
    const _copyBudgets = "_copyBudgets";
    const _copyChartOfAccountsToNewCompany = "_copyChartOfAccountsToNewCompany";
    const _copyProjectTasks = "_copyProjectTasks";
    const _coreAdministrationPermissions = "_coreAdministrationPermissions";
    const _costedBillOfMaterialsInquiry = "_costedBillOfMaterialsInquiry";
    const _costOfGoodsSoldRegisters = "_costOfGoodsSoldRegisters";
    const _countInventory = "_countInventory";
    const _createAllocationSchedules = "_createAllocationSchedules";
    const _createConsolidationCompany = "_createConsolidationCompany";
    const _createFiscalCalendar = "_createFiscalCalendar";
    const _createInventoryCounts = "_createInventoryCounts";
    const _createProjectsFromSalesTransactions = "_createProjectsFromSalesTransactions";
    const _creditCard = "_creditCard";
    const _creditCardProcessing = "_creditCardProcessing";
    const _creditCardRefund = "_creditCardRefund";
    const _creditCardRegisters = "_creditCardRegisters";
    const _creditMemo = "_creditMemo";
    const _creditReturns = "_creditReturns";
    const _crmGroups = "_crmGroups";
    const _crmLists = "_crmLists";
    const _crossChargeJournal = "_crossChargeJournal";
    const _cspSetup = "_cspSetup";
    const _currency = "_currency";
    const _currencyAdjustmentJournal = "_currencyAdjustmentJournal";
    const _currencyRevaluation = "_currencyRevaluation";
    const _customAddressForm = "_customAddressForm";
    const _customBodyFields = "_customBodyFields";
    const _customCenterCategories = "_customCenterCategories";
    const _customCenterLinks = "_customCenterLinks";
    const _customCenters = "_customCenters";
    const _customCenterTabs = "_customCenterTabs";
    const _customColumnFields = "_customColumnFields";
    const _customEntityFields = "_customEntityFields";
    const _customEntryForms = "_customEntryForms";
    const _customerCharge = "_customerCharge";
    const _customerDeposit = "_customerDeposit";
    const _customerPayment = "_customerPayment";
    const _customerPaymentAuthorization = "_customerPaymentAuthorization";
    const _customerProfile = "_customerProfile";
    const _customerRefund = "_customerRefund";
    const _customers = "_customers";
    const _customerSegmentsManager = "_customerSegmentsManager";
    const _customerStatus = "_customerStatus";
    const _customEventFields = "_customEventFields";
    const _customFields = "_customFields";
    const _customGlLinesPlugInAuditLog = "_customGlLinesPlugInAuditLog";
    const _customGlLinesPlugInAuditLogSegments = "_customGlLinesPlugInAuditLogSegments";
    const _customHTMLLayouts = "_customHTMLLayouts";
    const _customItemFields = "_customItemFields";
    const _customItemNumberFields = "_customItemNumberFields";
    const _customizeFieldLevelHelp = "_customizeFieldLevelHelp";
    const _customizePage = "_customizePage";
    const _customLists = "_customLists";
    const _customPDFLayouts = "_customPDFLayouts";
    const _customRecognitionEventType = "_customRecognitionEventType";
    const _customRecordEntries = "_customRecordEntries";
    const _customRecordTypes = "_customRecordTypes";
    const _customSegments = "_customSegments";
    const _customSublist = "_customSublist";
    const _customSublists = "_customSublists";
    const _customSubtabs = "_customSubtabs";
    const _customTransactionFields = "_customTransactionFields";
    const _customTransactionForms = "_customTransactionForms";
    const _customTransactionTypes = "_customTransactionTypes";
    const _deferredExpenseRegisters = "_deferredExpenseRegisters";
    const _deferredExpenseReports = "_deferredExpenseReports";
    const _deferredRevenueRegisters = "_deferredRevenueRegisters";
    const _deleteAllData = "_deleteAllData";
    const _deletedRecords = "_deletedRecords";
    const _deleteEvent = "_deleteEvent";
    const _departmentMapping = "_departmentMapping";
    const _departments = "_departments";
    const _deposit = "_deposit";
    const _depositApplication = "_depositApplication";
    const _deviceIdManagement = "_deviceIdManagement";
    const _directDepositStatus = "_directDepositStatus";
    const _distributeInventory = "_distributeInventory";
    const _distributionNetwork = "_distributionNetwork";
    const _documentsAndFiles = "_documentsAndFiles";
    const _duplicateCaseManagement = "_duplicateCaseManagement";
    const _duplicateDetectionSetup = "_duplicateDetectionSetup";
    const _duplicateRecordManagement = "_duplicateRecordManagement";
    const _earliestAvailability = "_earliestAvailability";
    const _editForecast = "_editForecast";
    const _editManagerForecast = "_editManagerForecast";
    const _editProfile = "_editProfile";
    const _eftStatus = "_eftStatus";
    const _emailReports = "_emailReports";
    const _emailTemplate = "_emailTemplate";
    const _employeeAccessTab = "_employeeAccessTab";
    const _employeeAdministration = "_employeeAdministration";
    const _employeeCenterPublishing = "_employeeCenterPublishing";
    const _employeeChangeReason = "_employeeChangeReason";
    const _employeeChangeRequest = "_employeeChangeRequest";
    const _employeeChangeRequestType = "_employeeChangeRequestType";
    const _employeeCommissionSchedulesPlans = "_employeeCommissionSchedulesPlans";
    const _employeeCommissionTransaction = "_employeeCommissionTransaction";
    const _employeeCommissionTransactionApproval = "_employeeCommissionTransactionApproval";
    const _employeeConfidential = "_employeeConfidential";
    const _employeeEffectiveDating = "_employeeEffectiveDating";
    const _employeePublic = "_employeePublic";
    const _employeeRecord = "_employeeRecord";
    const _employeeReminders = "_employeeReminders";
    const _employees = "_employees";
    const _employeeSelf = "_employeeSelf";
    const _employeeSocialSecurityNumbers = "_employeeSocialSecurityNumbers";
    const _enableFeatures = "_enableFeatures";
    const _enterCompletions = "_enterCompletions";
    const _enterOpeningBalances = "_enterOpeningBalances";
    const _enterVendorCredits = "_enterVendorCredits";
    const _enterYearToDatePayrollAdjustments = "_enterYearToDatePayrollAdjustments";
    const _entityAccountMapping = "_entityAccountMapping";
    const _equityRegisters = "_equityRegisters";
    const _escalationAssignment = "_escalationAssignment";
    const _escalationAssignmentRule = "_escalationAssignmentRule";
    const _establishQuotas = "_establishQuotas";
    const _estimate = "_estimate";
    const _events = "_events";
    const _expenseAmortizationPlan = "_expenseAmortizationPlan";
    const _expenseAmortizationRule = "_expenseAmortizationRule";
    const _expenseCategories = "_expenseCategories";
    const _expenseRegisters = "_expenseRegisters";
    const _expenseReport = "_expenseReport";
    const _expenseReportPolicies = "_expenseReportPolicies";
    const _expenses = "_expenses";
    const _exportAsIIF = "_exportAsIIF";
    const _exportLists = "_exportLists";
    const _fairValueDimension = "_fairValueDimension";
    const _fairValueFormula = "_fairValueFormula";
    const _fairValuePrice = "_fairValuePrice";
    const _faxMessages = "_faxMessages";
    const _faxTemplate = "_faxTemplate";
    const _financeCharge = "_financeCharge";
    const _financeChargePreferences = "_financeChargePreferences";
    const _financialHistory = "_financialHistory";
    const _financialInstitutionRecords = "_financialInstitutionRecords";
    const _financialStatementLayouts = "_financialStatementLayouts";
    const _financialStatements = "_financialStatements";
    const _financialStatementSections = "_financialStatementSections";
    const _findTransaction = "_findTransaction";
    const _fiscalCalendars = "_fiscalCalendars";
    const _fixedAssetRegisters = "_fixedAssetRegisters";
    const _foreignCurrencyVarianceMapping = "_foreignCurrencyVarianceMapping";
    const _form1099FederalMiscellaneousIncome = "_form1099FederalMiscellaneousIncome";
    const _form940EmployersAnnualFederalUnemploymentTaxReturn = "_form940EmployersAnnualFederalUnemploymentTaxReturn";
    const _form941EmployersQuarterlyFederalTaxReturn = "_form941EmployersQuarterlyFederalTaxReturn";
    const _formW2WageAndTaxStatement = "_formW2WageAndTaxStatement";
    const _formW4EmployeesWithholdingAllowanceCertificate = "_formW4EmployeesWithholdingAllowanceCertificate";
    const _fulfillmentExceptionReason = "_fulfillmentExceptionReason";
    const _fulfillmentRequest = "_fulfillmentRequest";
    const _fulfillOrders = "_fulfillOrders";
    const _generalLedger = "_generalLedger";
    const _generalToken = "_generalToken";
    const _generatePriceLists = "_generatePriceLists";
    const _generateRevenueCommitment = "_generateRevenueCommitment";
    const _generateRevenueCommitmentReversals = "_generateRevenueCommitmentReversals";
    const _generateSingleOrderRevenueContracts = "_generateSingleOrderRevenueContracts";
    const _generateStatements = "_generateStatements";
    const _genericResources = "_genericResources";
    const _globalAccountMapping = "_globalAccountMapping";
    const _globalInventoryRelationship = "_globalInventoryRelationship";
    const _governmentIssuedIdTypes = "_governmentIssuedIdTypes";
    const _grantingAccessToReports = "_grantingAccessToReports";
    const _gstSummaryReport = "_gstSummaryReport";
    const _hideEmployeeInformationOnFinancialReports = "_hideEmployeeInformationOnFinancialReports";
    const _importCSVFile = "_importCSVFile";
    const _importedEmployeeExpenses = "_importedEmployeeExpenses";
    const _importOnlineBankingFile = "_importOnlineBankingFile";
    const _importStateSalesTax = "_importStateSalesTax";
    const _inboundShipment = "_inboundShipment";
    const _income = "_income";
    const _incomeRegisters = "_incomeRegisters";
    const _incomeStatement = "_incomeStatement";
    const _individualPaycheck = "_individualPaycheck";
    const _integration = "_integration";
    const _integrationApplication = "_integrationApplication";
    const _integrationApplications = "_integrationApplications";
    const _intercompanyAdjustments = "_intercompanyAdjustments";
    const _internalPublisher = "_internalPublisher";
    const _inventory = "_inventory";
    const _inventoryCostTemplate = "_inventoryCostTemplate";
    const _inventoryStatus = "_inventoryStatus";
    const _inventoryStatusChange = "_inventoryStatusChange";
    const _invoice = "_invoice";
    const _invoiceApproval = "_invoiceApproval";
    const _issueComponents = "_issueComponents";
    const _issueReports = "_issueReports";
    const _issues = "_issues";
    const _issueSetup = "_issueSetup";
    const _itemAccountMapping = "_itemAccountMapping";
    const _itemCategoryLayouts = "_itemCategoryLayouts";
    const _itemCollection = "_itemCollection";
    const _itemDemandPlan = "_itemDemandPlan";
    const _itemFulfillment = "_itemFulfillment";
    const _itemProcessFamily = "_itemProcessFamily";
    const _itemProcessGroup = "_itemProcessGroup";
    const _itemReceipt = "_itemReceipt";
    const _itemRevenueCategory = "_itemRevenueCategory";
    const _itemRevisions = "_itemRevisions";
    const _items = "_items";
    const _itemSupplyPlan = "_itemSupplyPlan";
    const _itemTemplates = "_itemTemplates";
    const _jobManagement = "_jobManagement";
    const _jobRequisitions = "_jobRequisitions";
    const _journalApproval = "_journalApproval";
    const _keyAccess = "_keyAccess";
    const _keyManagement = "_keyManagement";
    const _knowledgeBase = "_knowledgeBase";
    const _kpiScorecards = "_kpiScorecards";
    const _kudos = "_kudos";
    const _laborCosting = "_laborCosting";
    const _leadConversion = "_leadConversion";
    const _leadConversionMapping = "_leadConversionMapping";
    const _leadSnapshotReminders = "_leadSnapshotReminders";
    const _letterMessages = "_letterMessages";
    const _letterTemplate = "_letterTemplate";
    const _locationCostingGroup = "_locationCostingGroup";
    const _locationMapping = "_locationMapping";
    const _locations = "_locations";
    const _lockTransactions = "_lockTransactions";
    const _logInUsingAccessTokens = "_logInUsingAccessTokens";
    const _logInUsingOauth20accessTokens = "_logInUsingOauth20accessTokens";
    const _longTermLiabilityRegisters = "_longTermLiabilityRegisters";
    const _mailMerge = "_mailMerge";
    const _makeJournalEntry = "_makeJournalEntry";
    const _manageAccountingPeriods = "_manageAccountingPeriods";
    const _manageCrossChargeAutomation = "_manageCrossChargeAutomation";
    const _manageCustomPermissions = "_manageCustomPermissions";
    const _manageCustomRestrictions = "_manageCustomRestrictions";
    const _managePayroll = "_managePayroll";
    const _manageRoles = "_manageRoles";
    const _manageTaxReportingPeriods = "_manageTaxReportingPeriods";
    const _manageTranslation = "_manageTranslation";
    const _manageUsers = "_manageUsers";
    const _manufacturingCostTemplate = "_manufacturingCostTemplate";
    const _manufacturingPreferences = "_manufacturingPreferences";
    const _manufacturingRouting = "_manufacturingRouting";
    const _marketingCampaignReports = "_marketingCampaignReports";
    const _marketingCampaigns = "_marketingCampaigns";
    const _marketingTemplate = "_marketingTemplate";
    const _markIssueAsShowStopper = "_markIssueAsShowStopper";
    const _markWorkOrdersBuilt = "_markWorkOrdersBuilt";
    const _markWorkOrdersFirmed = "_markWorkOrdersFirmed";
    const _markWorkOrdersReleased = "_markWorkOrdersReleased";
    const _massUpdates = "_massUpdates";
    const _matchingRulesForOnlineBanking = "_matchingRulesForOnlineBanking";
    const _materialRequirementsPlanning = "_materialRequirementsPlanning";
    const _mediaFolders = "_mediaFolders";
    const _memorizedTransactions = "_memorizedTransactions";
    const _merchandiseHierarchyLevel = "_merchandiseHierarchyLevel";
    const _merchandiseHierarchyNode = "_merchandiseHierarchyNode";
    const _merchandiseHierarchyVersion = "_merchandiseHierarchyVersion";
    const _migrateRevenueArrangementsAndPlans = "_migrateRevenueArrangementsAndPlans";
    const _mobileDeviceAccess = "_mobileDeviceAccess";
    const _nettingSettlement = "_nettingSettlement";
    const _nettingSettlementApproval = "_nettingSettlementApproval";
    const _netWorth = "_netWorth";
    const _newsItems = "_newsItems";
    const _nonPostingRegisters = "_nonPostingRegisters";
    const _noPermissionNecessary = "_noPermissionNecessary";
    const _notesTab = "_notesTab";
    const _notifications = "_notifications";
    const _oauth20authorizedApplicationsManagement = "_oauth20authorizedApplicationsManagement";
    const _oaxConnectorAdministrator = "_oaxConnectorAdministrator";
    const _onlineCaseForm = "_onlineCaseForm";
    const _onlineCustomerForm = "_onlineCustomerForm";
    const _onlineCustomRecordForm = "_onlineCustomRecordForm";
    const _openidConnectOidcSingleSignOn = "_openidConnectOidcSingleSignOn";
    const _openidSingleSignOn = "_openidSingleSignOn";
    const _opportunity = "_opportunity";
    const _orderAllocationStrategy = "_orderAllocationStrategy";
    const _orderPromising = "_orderPromising";
    const _orderReservation = "_orderReservation";
    const _organizationalValue = "_organizationalValue";
    const _otherAssetRegisters = "_otherAssetRegisters";
    const _otherCurrentAssetRegisters = "_otherCurrentAssetRegisters";
    const _otherCurrentLiabilityRegisters = "_otherCurrentLiabilityRegisters";
    const _otherCustomFields = "_otherCustomFields";
    const _otherExpenseRegisters = "_otherExpenseRegisters";
    const _otherIncomeRegisters = "_otherIncomeRegisters";
    const _otherLists = "_otherLists";
    const _otherNames = "_otherNames";
    const _outboundRequest = "_outboundRequest";
    const _outlookIntegration = "_outlookIntegration";
    const _outlookIntegration3 = "_outlookIntegration3";
    const _overrideEstimatedCostOnTransactions = "_overrideEstimatedCostOnTransactions";
    const _overridePaymentHold = "_overridePaymentHold";
    const _overridePeriodRestrictions = "_overridePeriodRestrictions";
    const _ownershipTransfer = "_ownershipTransfer";
    const _partnerAuthorizedCommissionReports = "_partnerAuthorizedCommissionReports";
    const _partnerCommissionReports = "_partnerCommissionReports";
    const _partnerCommissionSchedulesPlans = "_partnerCommissionSchedulesPlans";
    const _partnerCommissionTransaction = "_partnerCommissionTransaction";
    const _partnerCommissionTransactionApproval = "_partnerCommissionTransactionApproval";
    const _partnerContribution = "_partnerContribution";
    const _partners = "_partners";
    const _payBills = "_payBills";
    const _paycheckJournal = "_paycheckJournal";
    const _paychecks = "_paychecks";
    const _paymentCard = "_paymentCard";
    const _paymentCardToken = "_paymentCardToken";
    const _paymentInstruments = "_paymentInstruments";
    const _paymentMethods = "_paymentMethods";
    const _payrollCheckRegister = "_payrollCheckRegister";
    const _payrollHoursAndEarnings = "_payrollHoursAndEarnings";
    const _payrollItems = "_payrollItems";
    const _payrollJournalReport = "_payrollJournalReport";
    const _payrollLiabilityPayments = "_payrollLiabilityPayments";
    const _payrollLiabilityReport = "_payrollLiabilityReport";
    const _payrollStateWithholding = "_payrollStateWithholding";
    const _payrollSummaryAndDetailReports = "_payrollSummaryAndDetailReports";
    const _paySalesTax = "_paySalesTax";
    const _payTaxLiability = "_payTaxLiability";
    const _pdfMessages = "_pdfMessages";
    const _pdfTemplate = "_pdfTemplate";
    const _performSearch = "_performSearch";
    const _periodClosingManagement = "_periodClosingManagement";
    const _periodEndFinancialStatements = "_periodEndFinancialStatements";
    const _periodEndJournals = "_periodEndJournals";
    const _persistSearch = "_persistSearch";
    const _personalBankingInformation = "_personalBankingInformation";
    const _phasedProcesses = "_phasedProcesses";
    const _phoneCalls = "_phoneCalls";
    const _pickStrategy = "_pickStrategy";
    const _pickTask = "_pickTask";
    const _plannedRevenue = "_plannedRevenue";
    const _plannedStandardCost = "_plannedStandardCost";
    const _positions = "_positions";
    const _postingPeriodOnTransactions = "_postingPeriodOnTransactions";
    const _postTime = "_postTime";
    const _postVendorBillVariances = "_postVendorBillVariances";
    const _presentationCategories = "_presentationCategories";
    const _priceBooks = "_priceBooks";
    const _pricePlans = "_pricePlans";
    const _printChecksAndForms = "_printChecksAndForms";
    const _printEmailFax = "_printEmailFax";
    const _printShipmentDocuments = "_printShipmentDocuments";
    const _processGSTRefund = "_processGSTRefund";
    const _processPayroll = "_processPayroll";
    const _projectBudget = "_projectBudget";
    const _projectIntercompanyCrossChargeRequest = "_projectIntercompanyCrossChargeRequest";
    const _projectProfitability = "_projectProfitability";
    const _projectProfitabilitySetup = "_projectProfitabilitySetup";
    const _projectProjectTemplateConversion = "_projectProjectTemplateConversion";
    const _projectRevenueRules = "_projectRevenueRules";
    const _projects = "_projects";
    const _projectTasks = "_projectTasks";
    const _projectTemplates = "_projectTemplates";
    const _promotionCode = "_promotionCode";
    const _provisioning = "_provisioning";
    const _provisioningForQa = "_provisioningForQa";
    const _provisionNewAccountOnTestdrive = "_provisionNewAccountOnTestdrive";
    const _provisionTestDrive = "_provisionTestDrive";
    const _pstSummaryReport = "_pstSummaryReport";
    const _publicTemplateCategories = "_publicTemplateCategories";
    const _publishDashboards = "_publishDashboards";
    const _publishEmployeeList = "_publishEmployeeList";
    const _publishForms = "_publishForms";
    const _publishKnowledgeBase = "_publishKnowledgeBase";
    const _publishRSSFeeds = "_publishRSSFeeds";
    const _publishSearch = "_publishSearch";
    const _purchaseContract = "_purchaseContract";
    const _purchaseContractApproval = "_purchaseContractApproval";
    const _purchaseOrder = "_purchaseOrder";
    const _purchaseOrderReports = "_purchaseOrderReports";
    const _purchases = "_purchases";
    const _quantityPricingSchedules = "_quantityPricingSchedules";
    const _quotaReports = "_quotaReports";
    const _reallocateOrderItem = "_reallocateOrderItem";
    const _receiveOrder = "_receiveOrder";
    const _receiveReturns = "_receiveReturns";
    const _recognitionTreatment = "_recognitionTreatment";
    const _recognitionTreatmentRule = "_recognitionTreatmentRule";
    const _recognizeGiftCertificateIncome = "_recognizeGiftCertificateIncome";
    const _reconcile = "_reconcile";
    const _reconcileReporting = "_reconcileReporting";
    const _recordCustomField = "_recordCustomField";
    const _refundReturns = "_refundReturns";
    const _relatedItems = "_relatedItems";
    const _removePersonalInformationCreate = "_removePersonalInformationCreate";
    const _removePersonalInformationRun = "_removePersonalInformationRun";
    const _reportCustomization = "_reportCustomization";
    const _reportScheduling = "_reportScheduling";
    const _requestForQuote = "_requestForQuote";
    const _requisition = "_requisition";
    const _requisitionApproval = "_requisitionApproval";
    const _resource = "_resource";
    const _resourceAllocationApproval = "_resourceAllocationApproval";
    const _resourceAllocationReports = "_resourceAllocationReports";
    const _resourceAllocations = "_resourceAllocations";
    const _resourceGroups = "_resourceGroups";
    const _restWebServices = "_restWebServices";
    const _returnAuthApproval = "_returnAuthApproval";
    const _returnAuthorization = "_returnAuthorization";
    const _returnAuthorizationReports = "_returnAuthorizationReports";
    const _revalueInventoryCost = "_revalueInventoryCost";
    const _revenueArrangement = "_revenueArrangement";
    const _revenueArrangementApproval = "_revenueArrangementApproval";
    const _revenueCommitment = "_revenueCommitment";
    const _revenueCommitmentReversal = "_revenueCommitmentReversal";
    const _revenueContracts = "_revenueContracts";
    const _revenueElement = "_revenueElement";
    const _revenueManagementVSOE = "_revenueManagementVSOE";
    const _revenueRecognitionFieldMapping = "_revenueRecognitionFieldMapping";
    const _revenueRecognitionPlan = "_revenueRecognitionPlan";
    const _revenueRecognitionReports = "_revenueRecognitionReports";
    const _revenueRecognitionRule = "_revenueRecognitionRule";
    const _revenueRecognitionSchedules = "_revenueRecognitionSchedules";
    const _reviewCustomGlPlugInExecutions = "_reviewCustomGlPlugInExecutions";
    const _runPayroll = "_runPayroll";
    const _sales = "_sales";
    const _salesByPartner = "_salesByPartner";
    const _salesByPromotionCode = "_salesByPromotionCode";
    const _salesCampaigns = "_salesCampaigns";
    const _salesChannel = "_salesChannel";
    const _salesForceAutomation = "_salesForceAutomation";
    const _salesForceAutomationSetup = "_salesForceAutomationSetup";
    const _salesOrder = "_salesOrder";
    const _salesOrderApproval = "_salesOrderApproval";
    const _salesOrderFulfillmentReports = "_salesOrderFulfillmentReports";
    const _salesOrderReports = "_salesOrderReports";
    const _salesOrderTransactionReport = "_salesOrderTransactionReport";
    const _salesRoles = "_salesRoles";
    const _salesTerritory = "_salesTerritory";
    const _salesTerritoryRule = "_salesTerritoryRule";
    const _samlSingleSignOn = "_samlSingleSignOn";
    const _scheduleMassUpdates = "_scheduleMassUpdates";
    const _sentEmail = "_sentEmail";
    const _setUpAccounting = "_setUpAccounting";
    const _setUpAchProcessing = "_setUpAchProcessing";
    const _setUpAdpPayroll = "_setUpAdpPayroll";
    const _setUpBillPay = "_setUpBillPay";
    const _setUpBudgets = "_setUpBudgets";
    const _setUpCampaignEmailAddresses = "_setUpCampaignEmailAddresses";
    const _setupCampaigns = "_setupCampaigns";
    const _setUpCompany = "_setUpCompany";
    const _setUpCsvPreferences = "_setUpCsvPreferences";
    const _setUpDomains = "_setUpDomains";
    const _setUpImageResizing = "_setUpImageResizing";
    const _setUpOpenidConnectOidcSingleSignOn = "_setUpOpenidConnectOidcSingleSignOn";
    const _setUpOpenidSingleSignOn = "_setUpOpenidSingleSignOn";
    const _setUpPayroll = "_setUpPayroll";
    const _setUpReminders = "_setUpReminders";
    const _setUpSamlSingleSignOn = "_setUpSamlSingleSignOn";
    const _setUpSnapshots = "_setUpSnapshots";
    const _setUpSoapWebServices = "_setUpSoapWebServices";
    const _setUpWebSite = "_setUpWebSite";
    const _setUpYearStatus = "_setUpYearStatus";
    const _shippingItems = "_shippingItems";
    const _shippingPartnerPackage = "_shippingPartnerPackage";
    const _shippingPartnerRegistration = "_shippingPartnerRegistration";
    const _shippingPartnerShipment = "_shippingPartnerShipment";
    const _shortcuts = "_shortcuts";
    const _siteSearch = "_siteSearch";
    const _soapWebServices = "_soapWebServices";
    const _standardCostVersion = "_standardCostVersion";
    const _statementCharge = "_statementCharge";
    const _statisticalAccountRegisters = "_statisticalAccountRegisters";
    const _storeCategories = "_storeCategories";
    const _storeContentCategories = "_storeContentCategories";
    const _storeContentItems = "_storeContentItems";
    const _storePickupFulfillment = "_storePickupFulfillment";
    const _storeTabs = "_storeTabs";
    const _subscriptionChangeOrders = "_subscriptionChangeOrders";
    const _subscriptionPlan = "_subscriptionPlan";
    const _subscriptions = "_subscriptions";
    const _subsidiaries = "_subsidiaries";
    const _subsidiaryHierarchyModification = "_subsidiaryHierarchyModification";
    const _subsidiarySettingsManager = "_subsidiarySettingsManager";
    const _subsidiaryTaxRegistrationsTab = "_subsidiaryTaxRegistrationsTab";
    const _suiteAnalyticsConnectReadAll = "_suiteAnalyticsConnectReadAll";
    const _suiteAnalyticsWorkbook = "_suiteAnalyticsWorkbook";
    const _suiteAppDeployment = "_suiteAppDeployment";
    const _suiteAppManagement = "_suiteAppManagement";
    const _suiteAppMarketplace = "_suiteAppMarketplace";
    const _suiteBundlerAuditTrail = "_suiteBundlerAuditTrail";
    const _suiteBundlerUpgrades = "_suiteBundlerUpgrades";
    const _suiteScript = "_suiteScript";
    const _suiteScriptNlCorpManagement = "_suiteScriptNlCorpManagement";
    const _suiteScriptScheduling = "_suiteScriptScheduling";
    const _suiteSignon = "_suiteSignon";
    const _suitetaxMigration = "_suitetaxMigration";
    const _supplyAllocationSetup = "_supplyAllocationSetup";
    const _supplyChainSnapshotList = "_supplyChainSnapshotList";
    const _support = "_support";
    const _supportCaseIssue = "_supportCaseIssue";
    const _supportCaseOrigin = "_supportCaseOrigin";
    const _supportCasePriority = "_supportCasePriority";
    const _supportCaseSnapshotReminders = "_supportCaseSnapshotReminders";
    const _supportCaseStatus = "_supportCaseStatus";
    const _supportCaseTerritory = "_supportCaseTerritory";
    const _supportCaseTerritoryRule = "_supportCaseTerritoryRule";
    const _supportCaseType = "_supportCaseType";
    const _supportSetup = "_supportSetup";
    const _swapPricesBetweenPriceLevels = "_swapPricesBetweenPriceLevels";
    const _systemEmailTemplate = "_systemEmailTemplate";
    const _systemJournal = "_systemJournal";
    const _systemStatus = "_systemStatus";
    const _tableauWorkbookExport = "_tableauWorkbookExport";
    const _talentAdministration = "_talentAdministration";
    const _tasks = "_tasks";
    const _tax = "_tax";
    const _taxDetailsTab = "_taxDetailsTab";
    const _taxRecords = "_taxRecords";
    const _taxReports = "_taxReports";
    const _taxSchedules = "_taxSchedules";
    const _teamSellingContribution = "_teamSellingContribution";
    const _tegataAccounts = "_tegataAccounts";
    const _tegataPayable = "_tegataPayable";
    const _tegataReceivable = "_tegataReceivable";
    const _telephonyIntegration = "_telephonyIntegration";
    const _templateCategories = "_templateCategories";
    const _terminationReasons = "_terminationReasons";
    const _testdriveMasters = "_testdriveMasters";
    const _timeOffAdministration = "_timeOffAdministration";
    const _timer = "_timer";
    const _timeTracking = "_timeTracking";
    const _trackMessages = "_trackMessages";
    const _trackTime = "_trackTime";
    const _transactionAccountingRules = "_transactionAccountingRules";
    const _transactionDetail = "_transactionDetail";
    const _transactionNumberingAuditLog = "_transactionNumberingAuditLog";
    const _transactionReceiveInboundShipment = "_transactionReceiveInboundShipment";
    const _transferFunds = "_transferFunds";
    const _transferInventory = "_transferInventory";
    const _transferOrder = "_transferOrder";
    const _transferOrderApproval = "_transferOrderApproval";
    const _translation = "_translation";
    const _trialBalance = "_trialBalance";
    const _twoFactorAuthentication = "_twoFactorAuthentication";
    const _twoFactorAuthenticationBase = "_twoFactorAuthenticationBase";
    const _unbilledReceivableRegisters = "_unbilledReceivableRegisters";
    const _unbuildAssemblies = "_unbuildAssemblies";
    const _uncategorizedPresentationItems = "_uncategorizedPresentationItems";
    const _undeliveredEmails = "_undeliveredEmails";
    const _units = "_units";
    const _unlockedTimePeriod = "_unlockedTimePeriod";
    const _updatePrices = "_updatePrices";
    const _upsellAssistant = "_upsellAssistant";
    const _upsellSetup = "_upsellSetup";
    const _upsellWizard = "_upsellWizard";
    const _usage = "_usage";
    const _userAccessTokens = "_userAccessTokens";
    const _userPreferences = "_userPreferences";
    const _usersAndPasswords = "_usersAndPasswords";
    const _vendorBillApproval = "_vendorBillApproval";
    const _vendorPaymentApproval = "_vendorPaymentApproval";
    const _vendorPaymentStatus = "_vendorPaymentStatus";
    const _vendorPrepayment = "_vendorPrepayment";
    const _vendorPrepaymentApplication = "_vendorPrepaymentApplication";
    const _vendorPrepaymentApproval = "_vendorPrepaymentApproval";
    const _vendorRequestForQuote = "_vendorRequestForQuote";
    const _vendorReturnAuthApproval = "_vendorReturnAuthApproval";
    const _vendorReturnAuthorization = "_vendorReturnAuthorization";
    const _vendorReturns = "_vendorReturns";
    const _vendors = "_vendors";
    const _viewGatewayAsynchronousNotifications = "_viewGatewayAsynchronousNotifications";
    const _viewLoginAuditTrail = "_viewLoginAuditTrail";
    const _viewOnlineBillPayStatus = "_viewOnlineBillPayStatus";
    const _viewPaymentEvents = "_viewPaymentEvents";
    const _viewPaymentResultPreviews = "_viewPaymentResultPreviews";
    const _viewSoapWebServicesLogs = "_viewSoapWebServicesLogs";
    const _viewUnencryptedCreditCards = "_viewUnencryptedCreditCards";
    const _wave = "_wave";
    const _webSiteExternalPublisher = "_webSiteExternalPublisher";
    const _webSiteManagement = "_webSiteManagement";
    const _webSiteReport = "_webSiteReport";
    const _webStoreEmailTemplate = "_webStoreEmailTemplate";
    const _webStoreReport = "_webStoreReport";
    const _workAssignments = "_workAssignments";
    const _workBreakdownStructure = "_workBreakdownStructure";
    const _workCalendar = "_workCalendar";
    const _workflow = "_workflow";
    const _workforceAnalytics = "_workforceAnalytics";
    const _workOrder = "_workOrder";
    const _workOrderClose = "_workOrderClose";
    const _workOrderCompletion = "_workOrderCompletion";
    const _workOrderIssue = "_workOrderIssue";
    const _workplaces = "_workplaces";
    const _zone = "_zone";
}
