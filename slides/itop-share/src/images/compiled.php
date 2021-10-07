<?php

class Server extends DatacenterDevice
{
	// 初始化模型，对应XML中properties和fields部分
	public static function Init() {
		$aParams = array('db_table' => 'server', ...);
		MetaModel::Init_Params($aParams);
		// 首先初始化继承的属性
		MetaModel::Init_InheritAttributes();
		// 然后Init_AddAttribute 新增本类型特有的属性
		MetaModel::Init_AddAttribute(
			new AttributeExternalKey("osfamily_id", 
				array("targetclass"=>'OSFamily', ...)
			)
		);
		// 指定详情页，搜索，列表展示的属性和顺序
		// 对应 XML中 presentation 部分
		MetaModel::Init_SetZListItems('details', 
			array (0=>'softwares_list', ...)
		);
		MetaModel::Init_SetZListItems('standard_search', 
			array (0=>'softwares_list', ...)
		);
		MetaModel::Init_SetZListItems('list', 
			array (0=>'softwares_list', ...)
		);
	}

	// 可以被重写的方法
	public static function GetRelationQueries($sRelCode){
		return parent::GetRelationQueries($sRelCode);
	}

	public function CustomFunction() {
		// 自定义的方法
		// 自定义方法需要被Hook方法调用
	}
}
