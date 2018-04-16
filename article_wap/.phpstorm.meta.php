<?php
	namespace PHPSTORM_META {
	/** @noinspection PhpUnusedLocalVariableInspection */
	/** @noinspection PhpIllegalArrayKeyTypeInspection */
	$STATIC_METHOD_TYPES = [

		\D('') => [
			'Adv' instanceof Think\Model\AdvModel,
			'Mongo' instanceof Think\Model\MongoModel,
			'View' instanceof Think\Model\ViewModel,
			'Relation' instanceof Think\Model\RelationModel,
			'Merge' instanceof Think\Model\MergeModel,
		],
		\DL('') => [
			'GoodsLogic' instanceof Mobile\Logic\GoodsLogic,
			'UsersLogic' instanceof Mobile\Logic\UsersLogic,
			'ArticleLogic' instanceof Mobile\Logic\ArticleLogic,
		],
	];
}