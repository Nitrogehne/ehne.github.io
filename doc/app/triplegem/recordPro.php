<?
	// ����ȣ��Ʈ1�� DB�� ����
	$dbconn = mysql_connect("localhost1", "ehne", "3141592db") || die("�����ͺ��̽� ���ῡ �����Ͽ����ϴ�.");
	
	//���°� �������� ���� �ƴϸ� ����
	$status = mysql_select_db("ehne");
	if(!$status)
	{
		error("DB_ERROR");
		exit;
	}
  mysql_query("SET NAMES UTF8");

  if($workType == "record") // ������ ����
  {
    $query = "insert into `Ehne_TripleGem`";
    $query .= " set";
    $query .= " `ID`='".$id."'";
    $query .= trim($comment) ? ", `Comment`='".$comment."'" : "";
    $query .= ", `Score`='".$score."'";
    $query .= ", `Star`='".$star."'";
    $query .= ", `Date`='".mktime()."'";
    mysql_query($query);
  echo "<script>location = '?menu=".$menu."&path=".$path."&sub=TripleGem';</script>";
  }
?>