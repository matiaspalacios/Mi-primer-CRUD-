<?php
function paginate($page, $tpages, $adjacents) {
	$prevlabel = "&lsaquo; Anterior";
	$nextlabel = "Siguiente &rsaquo;";
	$out = '<ul class="pagination   pull-right">';
	
	// antes del label

	if($page==1) {
		$out.= "<li class='page-item disabled'><a>$prevlabel</a></li>";
	} else if($page==2) {
		$out.= "<li class='page-item'><a href='javascript:void(0);' onclick='load(1)'>$prevlabel</a></li>";
	}else {
		$out.= "<li class='page-item'><a href='javascript:void(0);' onclick='load(".($page-1).")'>$prevlabel</a></li>";

	}
	
	// primer label
	if($page>($adjacents+1)) {
		$out.= "<li class='page-item'><a href='javascript:void(0);' onclick='load(1)'>1</a></li>";
	}
	// intervalo
	if($page>($adjacents+2)) {
		$out.= "<li class='page-item'><a>...</a></li>";
	}

	// paginas

	$pmin = ($page>$adjacents) ? ($page-$adjacents) : 1;
	$pmax = ($page<($tpages-$adjacents)) ? ($page+$adjacents) : $tpages;
	for($i=$pmin; $i<=$pmax; $i++) {
		if($i==$page) {
			$out.= "<li class='active page-item'><a>$i</a></li>";
		}else if($i==1) {
			$out.= "<li class='page-item'><a href='javascript:void(0);' onclick='load(1)'>$i</a></li>";
		}else {
			$out.= "<li class='page-item'><a href='javascript:void(0);' onclick='load(".$i.")'>$i</a></li>";
		}
	}

	// interval0

	if($page<($tpages-$adjacents-1)) {
		$out.= "<li class='page-item'><a>...</a></li>";
	}

	// atras

	if($page<($tpages-$adjacents)) {
		$out.= "<li class='page-item'><a href='javascript:void(0);' onclick='load($tpages)'>$tpages</a></li>";
	}

	// siguiente

	if($page<$tpages) {
		$out.= "<li class='page-item'><a href='javascript:void(0);' onclick='load(".($page+1).")'>$nextlabel</a></li>";
	}else {
		$out.= "<li class='disabled page-item'><a>$nextlabel</a></li>";
	}
	
	$out.= "</ul>";
	return $out;
}
?>