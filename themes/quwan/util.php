 <?php
                         /*include_once("../includes/lib_insert.php"); 
                        $adv = array();
                        $adv['id'] = 1;
                        $res = insert_ads($adv);
                        echo $res;*/                        

/**
 * 通过类型与传入的ID获取广告内容
 *
 * @param string $type
 * @param int $id
 * @return string
 */					
function get_adv($type,$id)
{
	 $sql = "select ap.ad_width,ap.ad_height,ad.ad_name,ad.ad_code,ad.ad_link from ".$GLOBALS['ecs']->table('ad_position')." as ap left join ".$GLOBALS['ecs']->table('ad')." as ad on ad.position_id = ap.position_id where ad.ad_name='".$type."_".$id."' and ad.media_type=0 and UNIX_TIMESTAMP()>ad.start_time and UNIX_TIMESTAMP()<ad.end_time and ad.enabled=1";
     $res = $GLOBALS['db']->getRow($sql);
     if($res)                        
     return  "<a href='".$res['ad_link']."' target='_blank'><img src='data/afficheimg/".$res['ad_code']."' width='".$res['ad_width']."' height='".$res['ad_height']."' /></a>";	
	 else
	 {
		return "";
		
	  }
}

function get_adv_r($type,$id)
{
	 $sql = "select position_name ad_width,ad_height,position_style from ".$GLOBALS['ecs']->table('ad_position')." where position_name='".$type."_".$id."'";
     $res = $GLOBALS['db']->getRow($sql);
     if($res)                        
     return  "".$res['position_style']."";	
	 else
	 {
		return "";
		
	  }
}

function get_adv_4cate()
{
	 $sql = "select ap.ad_width,ap.ad_height,ad.ad_name,ad.ad_code,ad.ad_link from ".$GLOBALS['ecs']->table('ad_position')." as ap left join ".$GLOBALS['ecs']->table('ad')." as ad on ad.position_id = ap.position_id where ad.ad_name like 'slider_%' and ad.media_type=0 and UNIX_TIMESTAMP()>ad.start_time and UNIX_TIMESTAMP()<ad.end_time and ad.enabled=1";
     $res = $GLOBALS['db']->getAll($sql);
     
     foreach ($res as $k=>$row)
     {
     	$adname = explode('_',$row['ad_name']);
     	$cid = $adname[1];
     	$cat_sql = "select cat_name from ".$GLOBALS['ecs']->table('category')." where cat_id =".$cid;
     	$res[$k]['ad_cate'] = $GLOBALS['db']->getOne($cat_sql);
     }    
     
	  return $res;
}

function get_subcate($pid)
{
	$sql = "select cat_id,cat_name from ".$GLOBALS['ecs']->table('category')." where parent_id=".$pid;

	$res = $GLOBALS['db']->getAll($sql);
	return $res;
}

function get_brandcate($bid)
{
	$sql = "select cat.cat_id,cat.cat_name from ".$GLOBALS['ecs']->table('category')." as cat where cat.cat_id in (select distinct cat_id from ".$GLOBALS['ecs']->table('goods')." where brand_id = ".$bid.")";
	$res = $GLOBALS['db']->getAll($sql);
	return $res;
}

function get_goods_field($pid,$field_name)
{
	$sql = "select ".$field_name." from ".$GLOBALS['ecs']->table('goods')." where goods_id='".$pid."'";
	return $GLOBALS['db']->getOne($sql);
}

function get_hotcate()
{
	$sql = "select cat_id,cat_name from ".$GLOBALS['ecs']->table('category')." where cat_id in (select distinct cat_id from ".$GLOBALS['ecs']->table('cat_recommend')." where recommend_type in (1,2,3)) and is_show=1";

	$res = $GLOBALS['db']->getAll($sql);
	return $res;
}

/**
 * 通过传入参数的url判断是否为目录分类，从而获取子菜单
 *
 * @param string $url
 */
function get_subcate_byurl($url)
{
	$rs = strpos($url,"category");
	if($rs!==false)
	{
		preg_match("/\d+/i",$url,$matches);
		$cid = $matches[0];
		$cat_arr = array();
		$sql = "select * from ".$GLOBALS['ecs']->table('category')." where parent_id=".$cid." and is_show=1 ORDER BY sort_order ASC, cat_id ASC";
		$res = $GLOBALS['db']->getAll($sql);
		
		foreach($res as $idx => $row)
		{
			$cat_arr[$idx]['id']   = $row['cat_id'];
            $cat_arr[$idx]['name'] = $row['cat_name'];
            $cat_arr[$idx]['url']  = build_uri('category', array('cid' => $row['cat_id']), $row['cat_name']);
			$cat_arr[$idx]['children'] = get_clild_list($row['cat_id']);
		}

		return $cat_arr;
	}
	else 
	{
		return false;
	}
}

function get_clild_list($pid)
{
   //开始获取子分类
    $sql_sub = "select * from ".$GLOBALS['ecs']->table('category')." where parent_id=".$pid." and is_show=1 ";

	$subres = $GLOBALS['db']->getAll($sql_sub);
	if($subres)
	{
		foreach ($subres as $sidx => $subrow)
		{
			$children[$sidx]['id']=$subrow['cat_id'];
			$children[$sidx]['name']=$subrow['cat_name'];
			$children[$sidx]['url']=build_uri('category', array('cid' => $subrow['cat_id']), $subrow['cat_name']);
		}
	}
	else 
	{
		$children = null;
	}
			
	return $children;
}



?>