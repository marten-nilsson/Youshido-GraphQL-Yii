<?php


use Youshido\GraphQL\Execution\Processor;
use Youshido\GraphQL\Schema\Schema;
use Youshido\GraphQL\Type\Object\ObjectType;
use Examples\Blog\Schema\BlogSchema;


class GraphQlController extends Controller
{


	private $modelsDrop =  array
(
	'Acceptance' => 'Acceptance',
	'AccountingAccount' => 'AccountingAccount',
	'AccountingBalanceCarriedForward' => 'AccountingBalanceCarriedForward',
	'AccountingCostCentre' => 'AccountingCostCentre',
	'AccountingFinancialYear' => 'AccountingFinancialYear',
	'AccountingManual' => 'AccountingManual',
	// 'AccountingSIEExport' => 'AccountingSIEExport',
	'AccountingVerification' => 'AccountingVerification',
	'AccountingVerificationRow' => 'AccountingVerificationRow',
	// 'Activities' => 'Activities',
	'AppError' => 'AppError',
	'AppInit' => 'AppInit',
	'AttendanceFreeUser' => 'AttendanceFreeUser',
	'AttendanceId06User' => 'AttendanceId06User',
	'AttendanceId06UserNotAllowed' => 'AttendanceId06UserNotAllowed',
	'AttendanceReport' => 'AttendanceReport',
	'BlogPost' => 'BlogPost',
	'BrowserInfo' => 'BrowserInfo',
	// 'Captcha' => 'Captcha',
	// 'CheckContosForm' => 'CheckContosForm',
	'Comment' => 'Comment',
	'Comments' => 'Comments',
	'Company' => 'Company',
	'CompanyAccounts' => 'CompanyAccounts',
	'CompanyCostType' => 'CompanyCostType',
	'CompanyCreateFail' => 'CompanyCreateFail',
	'CompanyEdi' => 'CompanyEdi',
	'CompanyFortnox' => 'CompanyFortnox',
	'CompanyFunctions' => 'CompanyFunctions',
	'CompanyHasCompany' => 'CompanyHasCompany',
	'CompanyLeavingCompanyForm' => 'CompanyLeavingCompanyForm',
	'CompanyNoticeboard' => 'CompanyNoticeboard',
	'CompanyProjectType' => 'CompanyProjectType',
	'CompanyQualitystamp' => 'CompanyQualitystamp',
	'CompanySupplier' => 'CompanySupplier',
	'CompanyUserCostType' => 'CompanyUserCostType',
	'CompanyVacationPeriod' => 'CompanyVacationPeriod',
	'CompanyVismaEekonomi' => 'CompanyVismaEekonomi',
	'CompanyVismaFtp' => 'CompanyVismaFtp',
	'Contact' => 'Contact',
	'ContactBusiness' => 'ContactBusiness',
	// 'ContactForm' => 'ContactForm',
	'ContractFile' => 'ContractFile',
	'ContractFolder' => 'ContractFolder',
	'CoreLang' => 'CoreLang',
	'CostItem' => 'CostItem',
	'CostType' => 'CostType',
	'CostVerification' => 'CostVerification',
	'CostumerRelationToProject' => 'CostumerRelationToProject',
	'Day' => 'Day',
	'DayComment' => 'DayComment',
	'DayError' => 'DayError',
	'DayHistory' => 'DayHistory',
	'DayLeave' => 'DayLeave',
	'DayOvertimeRules' => 'DayOvertimeRules',
	'DayOvertimeRulesRelationUser' => 'DayOvertimeRulesRelationUser',
	'DayTodoRelation' => 'DayTodoRelation',
	'DocumentMeta' => 'DocumentMeta',
	'Documentation' => 'Documentation',
	'DocumentationCompanyRelation' => 'DocumentationCompanyRelation',
	'DocumentationSub' => 'DocumentationSub',
	// 'EDIFACTParser' => 'EDIFACTParser',
	'EdiOrder' => 'EdiOrder',
	'EdiOrderRow' => 'EdiOrderRow',
	// 'ExcelChunkReadFilter' => 'ExcelChunkReadFilter',
	// 'ExcelForm' => 'ExcelForm',
	// 'Fortnox' => 'Fortnox',
	'FortnoxLog' => 'FortnoxLog',
	'Forum' => 'Forum',
	'Holiday' => 'Holiday',
	'Hotlink' => 'Hotlink',
	'Invoice' => 'Invoice',
	'InvoicePayment' => 'InvoicePayment',
	'InvoiceRotRequesting' => 'InvoiceRotRequesting',
	'InvoiceRotRequestingExport' => 'InvoiceRotRequestingExport',
	'InvoiceRotRequestingExtra' => 'InvoiceRotRequestingExtra',
	'InvoiceRow' => 'InvoiceRow',
	// 'InvoiceRowType' => 'InvoiceRowType',
	'InvoiceTemplateText' => 'InvoiceTemplateText',
	// 'LoginForm' => 'LoginForm',
	'Mail' => 'Mail',
	'MailChimp' => 'MailChimp',
	'Offer' => 'Offer',
	'OfferContractor' => 'OfferContractor',
	'OfferFields' => 'OfferFields',
	'OfferOrganization' => 'OfferOrganization',
	'OfferSignatur' => 'OfferSignatur',
	'Offert' => 'Offert',
	'OffertContractors' => 'OffertContractors',
	'OffertDiv' => 'OffertDiv',
	'OffertInputs' => 'OffertInputs',
	'OffertOrganization' => 'OffertOrganization',
	'OffertPricelist' => 'OffertPricelist',
	'OffertSignatur' => 'OffertSignatur',
	'OffertTemplate' => 'OffertTemplate',
	'OffertTemplateContractors' => 'OffertTemplateContractors',
	'OffertTemplateDiv' => 'OffertTemplateDiv',
	'OffertTemplateInputs' => 'OffertTemplateInputs',
	'OffertTemplateOrganization' => 'OffertTemplateOrganization',
	'OffertTemplatePricelist' => 'OffertTemplatePricelist',
	'OffertTemplateSignatur' => 'OffertTemplateSignatur',
	'PageReload' => 'PageReload',
	'Payslip' => 'Payslip',
	'PayslipRow' => 'PayslipRow',
	'PayslipSalarySpecies' => 'PayslipSalarySpecies',
	'PayslipSalaryVacationPeriod' => 'PayslipSalaryVacationPeriod',
	'PictureComment' => 'PictureComment',
	// 'PictureForm' => 'PictureForm',
	'Post' => 'Post',
	// 'PrintForm' => 'PrintForm',
	'PrivateCostumer' => 'PrivateCostumer',
	// 'PrivateCostumerLoginForm' => 'PrivateCostumerLoginForm',
	'Product' => 'Product',
	'ProductArticleGroup' => 'ProductArticleGroup',
	'ProductBooked' => 'ProductBooked',
	'ProductChildRelation' => 'ProductChildRelation',
	'ProductDeliveryNote' => 'ProductDeliveryNote',
	'ProductInventory' => 'ProductInventory',
	'ProductPicked' => 'ProductPicked',
	'Project' => 'Project',
	'ProjectBookmark' => 'ProjectBookmark',
	'ProjectCostType' => 'ProjectCostType',
	'ProjectDefualtTodo' => 'ProjectDefualtTodo',
	'ProjectInstallment' => 'ProjectInstallment',
	'ProjectInstallmentRow' => 'ProjectInstallmentRow',
	'ProjectRot' => 'ProjectRot',
	'ProjectUserCostType' => 'ProjectUserCostType',
	'Projectproduct' => 'Projectproduct',
	'ProjectproductRelationToProductPicked' => 'ProjectproductRelationToProductPicked',
	'Prospect' => 'Prospect',
	'SalaryVacationPeriodData' => 'SalaryVacationPeriodData',
	// 'SearchForm' => 'SearchForm',
	'Skattetabeller' => 'Skattetabeller',
	'Skattetabeller2' => 'Skattetabeller2',
	'Subcontractor' => 'Subcontractor',
	'SubcontractorRelationToProject' => 'SubcontractorRelationToProject',
	'Tag' => 'Tag',
	'Thread' => 'Thread',
	'Todo' => 'Todo',
	'Todotopic' => 'Todotopic',
	'User' => 'User',
	'UserCalculation' => 'UserCalculation',
	'UserCalculationRow' => 'UserCalculationRow',
	'UserFeedback' => 'UserFeedback',
	'UserLogin' => 'UserLogin',
	'UserLoginFail' => 'UserLoginFail',
	'UserPageSetting' => 'UserPageSetting',
	'UserPlannedWork' => 'UserPlannedWork',
	'UserTodoRelation' => 'UserTodoRelation',
	'UserYearMonthData' => 'UserYearMonthData',
	'VismaEekonomiLog' => 'VismaEekonomiLog',
	// 'VismaFTP' => 'VismaFTP',
//	'CrmAdress' => 'CrmAdress',
//	'CrmBransch' => 'CrmBransch',
//	'CrmComments' => 'CrmComments',
//	'CrmCompanyPaymentplan' => 'CrmCompanyPaymentplan',
//	'CrmCompanyPaymentplanInvoiceSpecification' => 'CrmCompanyPaymentplanInvoiceSpecification',
//	'CrmCompanyPaymentplanType' => 'CrmCompanyPaymentplanType',
//	'CrmDraftThem' => 'CrmDraftThem',
//	'CrmForetagsfakta' => 'CrmForetagsfakta',
//	'CrmForetagsfaktaContact' => 'CrmForetagsfaktaContact',
//	'CrmForetagsfaktaactivities' => 'CrmForetagsfaktaactivities',
//	'CrmMail' => 'CrmMail',
//	'CrmOrts' => 'CrmOrts',


);


	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('Index'),
				'expression'=>'$user->isSimpel() || $user->isAdvanced() || $user->isAdmin()',
			),
			array('allow', // allow authenticated user to perform 'my' and 'update' actions
				'actions'=>array(''),
				'expression'=>'$user->isAdvanced() || $user->isAdmin()',
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('Kor'),
				'expression'=>'$user->isAdmin()',
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}





	public function actionIndex(){

		if (isset($_SERVER['CONTENT_TYPE']) && $_SERVER['CONTENT_TYPE'] === 'application/json') {
			$rawBody     = file_get_contents('php://input');
			$requestData = json_decode($rawBody ?: '', true);
		} else {
			$requestData = $_POST;
		}
		
		$payload   = isset($requestData['query']) ? $requestData['query'] : array() ;
		
		
		
		
		$variables = isset($requestData['variables']) ? $requestData['variables'] : null;
		$schema = new HyperionSchema();
		$processor = new Processor($schema);
		
		
		$processor->processPayload($payload);
		
		$response = $processor->processPayload($payload, $variables)->getResponseData();
		
		ob_clean();
		header('Content-type: application/json'); echo trim(json_encode($response));
		exit;
	
	}

	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function actionDerive(){
		$removedRelations = 0;
		$modelsDrop = $this->modelsDrop;



$labelBaseConfig = '';


foreach($modelsDrop as $modelName){

$newTypeClassName = $modelName.'TypeHyperion';



/**********************************

	Skapar Class som gör det möjligt att overrrida Base (som genereras automatiskt)

***********************************/
// om inte master fil finns, skapa , SKRIV INTE ÖVER EN SKAPAD master då här ligger skräddarsyd kod och inte autogenerad
if(!file_exists('protected/models/hyperion/types/'.$newTypeClassName.'.php')){
$fp=fopen('protected/models/hyperion/types/'.$newTypeClassName.'.php','w');
$output = '
<?php
//use Youshido\GraphQL\Type\NonNullType;
//use Youshido\GraphQL\Type\Object\AbstractObjectType;
//use Youshido\GraphQL\Type\Scalar\IdType;
//use Youshido\GraphQL\Type\Scalar\StringType;
//use Youshido\GraphQL\Type\Scalar\IntType;
//use Youshido\GraphQL\Type\ListType\ListType;
//use Youshido\GraphQL\Relay\Connection\ArrayConnection;
//use Youshido\GraphQL\Relay\Connection\Connection;
//use Youshido\GraphQL\Relay\Field\GlobalIdField;
//use Youshido\GraphQL\Relay\NodeInterfaceType;
//use Youshido\GraphQL\Type\TypeMap;

class '.$newTypeClassName.' extends '.$newTypeClassName.'Base{

}
?>
';
fwrite($fp, $output);
fclose($fp);
$output = '';
}
/**********************************

	SLUT Skapar Class som gör det möjligt att overrrida Base (som genereras automatiskt)

***********************************/









/**********************************

	Skapar Class Base med all standard logik

***********************************/
$fp=fopen('protected/models/hyperion/types/base/'.$newTypeClassName.'Base.php','w');


echo "<br>".$modelName;
		$model = new $modelName;
		$attributes = $model->getAttributes(); 


// Model med relationer 
$output = '

<?php
/*
* This file is a part of GraphQL project.
*
* @author Alexandr Viniychuk <a@viniychuk.com>
* created: 5/10/16 11:17 PM
*/


use Youshido\GraphQL\Type\NonNullType;
use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\IdType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Type\Scalar\IntType;
use Youshido\GraphQL\Type\ListType\ListType;

use Youshido\GraphQL\Relay\Connection\ArrayConnection;
use Youshido\GraphQL\Relay\Connection\Connection;
use Youshido\GraphQL\Relay\Field\GlobalIdField;
use Youshido\GraphQL\Relay\NodeInterfaceType;


use Youshido\GraphQL\Type\TypeMap;

class '.$newTypeClassName.'Base extends AbstractObjectType{

    public function build($config)
    {
';
		// lägger till alla fält för datamodellen 
		$first = true; 
		foreach($attributes as $attribute => $value){
			
			$preString = $first ? '			$config':'' ; 			
			if($attribute != 'id'){
				$output .= $preString.'->addField(\''.$attribute.'\', [\'type\' => TypeMap::TYPE_STRING, \'description\' => \''.$model->getAttributeLabel($attribute).'\'])
				';
			}else{
				            
				
	            $output .= $preString.'->addField(\'id\', new NonNullType(new IdType()))
				';
			}
			$first = false;
		}
		$output .= ';';
		
	// Lägger till alla relationer
 	$relations = $modelName::model()->relations();
	/* 
		Yiis relationstyper  
							CHasManyRelation 
							CBelongsToRelation  
							CHasOneRelation 
							CManyManyRelation 
							CStatElement
	*/
	foreach($relations as $relName => $rel){
		$relModelName = $rel[1]; 		
		$relationTypeName = $rel[0];
		
		if(in_array($relModelName,$modelsDrop)){

	
	
	
			if($relationTypeName == 'CHasManyRelation'
			 
			 ){
				$output .= '
					$config->addField(\''.$relName.'\', [
					\'type\'        => Connection::connectionDefinition(new '.$relModelName.'TypeHyperion()),
					\'description\' => \''.$relationTypeName.' -> '.$relName.'\',
					\'args\'        => array_merge(Connection::connectionArgs(), array(
							\'offset\' => [
							   \'type\' => new IntType()
						   ]
						   
						   ';
						   
						   
						  if(array_key_exists('id',$relModelName::model()->attributes)){
						$output .= '						   
							,\'id\' => [
								   \'type\' => new IntType()
							   ]						   
							   ';
						  }
				$output .= '						   
						   
						   
						   )),
					\'resolve\'     => function ($value = null, $args = [], $type = null) {
	
						$'.$modelName.'Model = '.$modelName.'::model()->findByPk($value[\'id\']);

						$parameters = array();


						if(isset($args[\'offset\'])){
							$parameters[\'offset\'] = $args[\'offset\'];

						}
						$limit = 18446744073709551; // tanke med 100 här som defenualt fr at hålla nere mens vårt tror jag
						if(isset($args[\'first\'])){
							$limit = 18446744073709551; // borde kunna vara samma som first då first är limit för hu många den ska visa

						}
						if(isset($args[\'last\'])){
							$limit = 18446744073709551; // kör vi last måste den vara max av alla psoter som finns
						}
							$parameters[\'limit\'] = $limit;
							
						
						if(isset($args[\'id\'])){
							$parameters = array();
							$parameters[\'condition\'] = \''.$relName.'.id=\'.$args[\'id\'];
						}

						$return = array();
						foreach($'.$modelName.'Model->'.$relName.'($parameters) as $'.$relModelName.'){
						
								$return[] = $'.$relModelName.'->attributes;
					
						}					
										
						return ArrayConnection::connectionFromArray($return, $args);
					}
				]);			
				';
			}else if(
			$relationTypeName == 'CHasOneRelation' 
 			 || $relationTypeName == 'CBelongsToRelation'  // nestling med denna 
			){
				
				// om CBelongsToRelation kolla om nedan har en relation tillbaka tilll ovan 
				$add = true; 
				if($relationTypeName == 'CBelongsToRelation'){
					$relationModelRelations = $relModelName::model()->relations();					
					foreach($relationModelRelations as $relationModelRelation){ // går över subdrelations relationer
						$add = $relationModelRelation[1] != $modelName; // om match so set till false, då den inte ska lägga till om relationen finns på båda hållen
					}

				}
				if($add){
					$output .= '
						$config->addField(\''.$relName.'\', [
						\'type\'        => new '.$relModelName.'TypeHyperion(),
						\'description\' => \''.$relationTypeName.' -> '.$relName.'\',
						\'args\'        => Connection::connectionArgs(),
						\'resolve\'     => function ($value = null, $args = [], $type = null) {';
							
					if($relModelName == 'Contact'){

 						$output .= 'return Yii::app()->cacheHandel->getByModel(\'Contact\',$value[\''.$rel[2].'\'])->attributes;';

					}else{
							
					$output .= '
							$CBelongsToRelationModel = '.$modelName.'::model()->findByPk($value[\'id\'])->'.$relName.';
							if($CBelongsToRelationModel !== NULL){								
								return $CBelongsToRelationModel->attributes;
							}else{
								return array();
							}
							';
					}
					$output .= '						
						}
					]);			
					';	
				}else{
					$removedRelations++;

				}
			}
		}
		
	}


$output .= '


$config->addField(\'labelsThisModel\', [
						\'type\'        => new '.$newTypeClassName.'Label(),
						\'description\' => \'LABEL '.$modelName.'\',
						\'args\'        => Connection::connectionArgs(),
						\'resolve\'     => function ($value = null, $args = [], $type = null) {
							return array('.implode(
        ', ',
        array_map(
            function ($v, $k) {
                return sprintf("'%s' => '%s'", $k, $v);
            },
            $model->attributeLabels(),
            array_keys($model->attributeLabels())
        )
    ).');
						}
					]);
					

					
	
    }

    public function getOne($id)
    {
        return TestDataProvider::getShip($id);
    }

    public function getDescription()
    {
        return \'Data type for model '.$modelName.' with relations\';
    }

    public function getInterfaces()
    {
        return [new NodeInterfaceType()];
    }

    public function getName()
    {
        return \''.$modelName.'\';  // important to use the real name here, it will be used later in the Schema
    }
}
?>';
fwrite($fp, $output);
fclose($fp);
/**********************************

	SLUT Skapar Class Base med all standard logik

***********************************/
			


/**********************************

	Skapar filer för labels

***********************************/
$fp=fopen('protected/models/hyperion/types/'.$newTypeClassName.'Label.php','w');
$output = '

<?php
/*
* This file is a part of GraphQL project.
*
* @author Alexandr Viniychuk <a@viniychuk.com>
* created: 5/10/16 11:17 PM
*/


use Youshido\GraphQL\Type\NonNullType;
use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\IdType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Type\Scalar\IntType;
use Youshido\GraphQL\Type\ListType\ListType;

use Youshido\GraphQL\Relay\Connection\ArrayConnection;
use Youshido\GraphQL\Relay\Connection\Connection;
use Youshido\GraphQL\Relay\Field\GlobalIdField;
use Youshido\GraphQL\Relay\NodeInterfaceType;


use Youshido\GraphQL\Type\TypeMap;

class '.$newTypeClassName.'Label extends AbstractObjectType{

    public function build($config)
    {
';
		// lägger till alla fält för datamodellen 
		$first = true; 
		$idIsAdded = false;
		foreach($attributes as $attribute => $value){
			
			$preString = $first ? '			$config':'' ; 			
			if($attribute != 'id'){
				$output .= $preString.'->addField(\''.$attribute.'\', [\'type\' => TypeMap::TYPE_STRING, \'description\' => \''.$model->getAttributeLabel($attribute).'\'])
				';
			}else{
				$idIsAdded = true;
	            $output .= $preString.'->addField(new GlobalIdField(self::getName()))
				';
			}
			$first = false;
		}
		if($idIsAdded == false){
	            $output .= $preString.'->addField(new GlobalIdField(self::getName()))
				';		
		}
		$output .= ';';
		

$output .= '			
    }

    public function getOne($id)
    {
        return TestDataProvider::getShip($id);
    }

    public function getDescription()
    {
        return \'Labels for '.$modelName.' data model\';
    }

    public function getInterfaces()
    {
        return [new NodeInterfaceType()];
    }

    public function getName()
    {
        return \''.$modelName.'Label\';  // important to use the real name here, it will be used later in the Schema
    }
}
?>';

fwrite($fp, $output);

fclose($fp);
/**********************************

	SLUT Skapar filer för labels

***********************************/




// bygg type fil med one relation


					$labelBaseConfig .= '->addField(\''.$modelName.'\', [
						\'type\'        => new '.$newTypeClassName.'Label(),
						\'description\' => \'LABEL '.$modelName.'\',
						\'args\'        => Connection::connectionArgs(),
						\'resolve\'     => function ($value = null, $args = [], $type = null) {
							return array('.implode(
        ', ',
        array_map(
            function ($v, $k) {
                return sprintf("'%s' => '%s'", $k, $v);
            },
            $model->attributeLabels(),
            array_keys($model->attributeLabels())
        )
    ).');
						}
					])		
					';	
	
			
}

$labelBase = '

<?php
/*
* This file is a part of GraphQL project.
*
* @author Alexandr Viniychuk <a@viniychuk.com>
* created: 5/10/16 11:17 PM
*/


use Youshido\GraphQL\Type\NonNullType;
use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\IdType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Type\Scalar\IntType;
use Youshido\GraphQL\Type\ListType\ListType;

use Youshido\GraphQL\Relay\Connection\ArrayConnection;
use Youshido\GraphQL\Relay\Connection\Connection;
use Youshido\GraphQL\Relay\Field\GlobalIdField;
use Youshido\GraphQL\Relay\NodeInterfaceType;


use Youshido\GraphQL\Type\TypeMap;

class LabelsForModelsTypeHyperionBase extends AbstractObjectType{

    public function build($config)
    {
		$config->addField(new GlobalIdField(self::getName()))';
$labelBase .= $labelBaseConfig; 		
$labelBase .= ';    
	}
	
	public function getOne($id)
    {
        return TestDataProvider::getShip($id);
    }

    public function getDescription()
    {
        return \'All labels for all models\';
    }

    public function getInterfaces()
    {
        return [new NodeInterfaceType()];
    }

    public function getName()
    {
        return \'Labels\';  // important to use the real name here, it will be used later in the Schema
    }
}
?>';
$fp=fopen('protected/models/hyperion/types/base/LabelsForModelsTypeHyperionBase.php','w');

fwrite($fp, $labelBase);
fclose($fp);
/**********************************

	Skapar vårt SCHEMA fil

***********************************/
$outputHyperionSchema = '
<?php

use Youshido\GraphQL\Config\Schema\SchemaConfig;
use Youshido\GraphQL\Field\InputField;
use Youshido\GraphQl\Relay\Connection\ArrayConnection;
use Youshido\GraphQL\Relay\Connection\Connection;
use Youshido\GraphQL\Relay\Fetcher\CallableFetcher;
use Youshido\GraphQL\Relay\Field\NodeField;
use Youshido\GraphQL\Relay\RelayMutation;
use Youshido\GraphQL\Schema\AbstractSchema;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Type\NonNullType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Type\Scalar\IntType;

class HyperionSchema extends AbstractSchema
{

    public function build(SchemaConfig $config)
    {				

$config->getQuery()';
/*
foreach($modelsDrop as $modelName){
	

	
	
	
$outputHyperionSchema .= '->addField(\'Label'.$modelName.'\', [
                 \'type\'    => new '.$modelName.'TypeHyperionLabel()
				,\'resolve\' => function ($value = null, $args, $info) {
            		return '.$modelName.'::model()->attributeLabels();
            	}
            ])			
			
			';
				


}
*/
$outputHyperionSchema .= '
->addField(\'labels\', [
                   \'type\'    => new LabelsForModelsTypeHyperionBase(),
					\'resolve\' => function ($value = null, $args, $info) {


                      return array();

                   }
               ])
->addField(\'projects\', [
                   \'type\'    => new ListType(new ProjectTypeHyperion()),

					   \'args\'    => array_merge(Connection::connectionArgs(), array(
						   \'status\' => [
							   \'type\' => new NonNullType(new ListType(new IntType()))
						   ],

	   
						   \'offset\' => [
							   \'type\' => new IntType()
						   ],				   					   
						   \'id\' => [
							   \'type\' => new IntType()
						   ],
	
					   )),\'resolve\' => function ($value = null, $args, $info) {

						$return = array();
						
						$company = Company::model()->findByPk(Yii::app()->user->companyId);
						
						if(isset($args[\'offset\'])){
							$parameters[\'offset\'] = $args[\'offset\'];

						}
						$limit = 18446744073709551; // tanke med 100 här som defenualt fr at hålla nere mens vårt tror jag
						if(isset($args[\'first\'])){
							$limit = 18446744073709551; // borde kunna vara samma som first då first är limit för hu många den ska visa

						}
						if(isset($args[\'last\'])){
							$limit = 18446744073709551; // kör vi last måste den vara max av alla psoter som finns
						}
						$parameters[\'limit\'] = $limit;
						
						$parameters[\'condition\'] = \'status =\'.$args[\'status\'];

						if(isset($args[\'id\'])){
							$parameters = array();
							$parameters[\'condition\'] = \'projects.id=\'.$args[\'id\'];
						}						
						
			
						foreach($company->projects($parameters) as $project){
				
								$return[] = $project->attributes;
						
						}
                      return $return;

                   }
               ])
              	->addField(\'users\', [
                   \'type\'    => new ListType(new UserTypeHyperion()),

					   \'args\'    => [
						   \'status\' => [
							   \'type\' => new IntType()
						   ],

	
					   ],\'resolve\' => function ($value = null, $args, $info) {


						$return = array();
						foreach(User::model()->findAll(array(\'condition\'=>\'companyId = \'.Yii::app()->user->companyId)) as $user){
							$return[] = $user->attributes;
						}
                      return $return;

                   }
               ]);


        $config->getMutation()
               ->addField(
                   RelayMutation::buildMutation(
                       \'introduceShip\',
                       [
                           new InputField([\'name\' => \'shipName\', \'type\' => new NonNullType(new StringType())]),
                           new InputField([\'name\' => \'factionId\', \'type\' => new NonNullType(new StringType())])
                       ],
                       [
                           \'newShipEdge\'    => [
                               \'type\'    => Connection::edgeDefinition(new ProjectTypeHyperion(), \'newShip\'),
                               \'resolve\' => function ($value) {
                        
                               }
                           ],
                           \'faction\' => [
                               \'type\'    => new ProjectTypeHyperion(),
                               \'resolve\' => function ($value) {
                                   // return TestDataProvider::getFaction($value[\'factionId\']);
                               }
                           ]
                       ],
                       function ($value, $args, $info) {
                           

                           return [
                               \'shipId\'    => 2,
                               \'factionId\' => 2
                           ];
                       }
                   )
               );




';

$outputHyperionSchema .= '

    }

 	public function getName()
    {
        return "HyperionSchema";  // important to use the real name here, it will be used later in the Schema
    }

}
';


$fp=fopen('protected/models/hyperion/HyperionSchema.php','w');

fwrite($fp, $outputHyperionSchema);
fclose($fp);
/**********************************

	SLUT Skapar vår SCHEMA fil

***********************************/
echo "<br><br>Borttagna relationer:"; 
echo $removedRelations;

	}
	
}








	/* 


		// lägger till alla fält för datamodellen 
		$first = true; 
		foreach($attributes as $attribute => $value){
			$preString = $first ? '			$config':'' ; 			
			if($attribute != 'id'){
				$output .= $preString.'->addField(\''.$attribute.'\', [\'type\' => TypeMap::TYPE_STRING, \'description\' => \'The name of the ship.\'])
				';
			}else{
	            $output .= $preString.'->addField(new GlobalIdField(self::getName()))
				';
			}
			$first = false;
		}
		$output .= ';';
		
	// Lägger till alla relationer
 	$relations = $modelName::model()->relations();

		Yiis relationstyper  
							CHasManyRelation 
							CBelongsToRelation  
							CHasOneRelation 
							CManyManyRelation 
							CStatElement

	foreach($relations as $relName => $rel){
		
		$relModelName = $rel[1]; 		
		$relationType = $rel[0];
		if(in_array($relModelName,$modelsDrop)){
		
			if($relationType == 'CHasManyRelation'){
				$output .= '
					$config->addField(\''.$relName.'\', [
					\'type\'        => Connection::connectionDefinition(new '.$relModelName.'TypeHyperion()),
					\'description\' => \'The ships used by the faction\',
					\'args\'        => Connection::connectionArgs(),
					\'resolve\'     => function ($value = null, $args = [], $type = null) {
						
						$'.$modelName.'Model = '.$modelName.'::model()->findByPk($value[\'id\']);
						$return = array();
						foreach($'.$modelName.'Model->'.$relName.' as $'.$relModelName.'){
							$return[] = $'.$relModelName.'->attributes;
						}
						return ArrayConnection::connectionFromArray($return, $args);
					}
				]);			
				';
			}else if($relationType == 'CBelongsToRelation'){
	
	
				$output .= '
					$config->addField(\''.$relName.'\', [
					\'type\'        => new '.$relModelName.'TypeHyperion(),
					\'description\' => \'The ships used by the faction\',
					\'args\'        => Connection::connectionArgs(),
					\'resolve\'     => function ($value = null, $args = [], $type = null) {
						
						return $'.$modelName.'Model->'.$relName.';
					}
				]);			
				';
	
				/*
						return ArrayConnection::connectionFromArray($return, $args);
	
							$output .= '
									$'.$modelName.'Model = '.$modelName.'::model()->findByPk($value[\'id\']);
				
									$return = array();
									foreach($'.$modelName.'Model->'.$relName.' as $'.$relModelName.'){
										$return[] = $'.$relModelName.'->attributes;
									}
									';
					
			}
		}
	}

	*/