!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml"  lang="fr">
 
<head>
<script type="text/javascript" src="chessproto.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="chessproto.css">
<title> Test ��chec grille </title>
</head>
 
<body>
 
<table id="plateau" cellspacing = "0" cellpadding="0"> <!--cellpadding et cellspacing pour retirer les bordures-->
 
<tr> <!--ligne 1-->
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case00" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case01" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case02" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case03" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case04" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case05" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case06" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case07" disabled="disabled"/></td>
</tr>
 
<tr > <!-- ligne 2 -->
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case10" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case11" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case12" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case13" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case14" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case15" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case16" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case17" disabled="disabled"/></td>
</tr>
 
<tr> <!-- ligne 3 -->
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case20" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case21" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case22" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case23" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case24" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case25" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case26" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case27" disabled="disabled"/></td>
</tr>
 
<tr> <!-- ligne 4 -->
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case30" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case31" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case32" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case33" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case34" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case35" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case36" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case37" disabled="disabled"/></td>
</tr>
 
<tr> <!-- ligne 5 -->
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case40" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case41" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case42" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case43" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case44" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case45" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case46" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case47" disabled="disabled"/></td>
</tr>
 
<tr> <!-- ligne 6 -->
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case50" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case51" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case52" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case53" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case54" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case55" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case56" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case57" disabled="disabled"/></td>
</tr>
 
<tr>  <!-- ligne 7 -->
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case60" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case61" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case62" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case63" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case64" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case65" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case66" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case67" disabled="disabled"/></td>
</tr>
 
<tr> <!-- ligne 8 -->
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case70" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case71" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case72" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case73" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case74" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case75" disabled="disabled"/></td>
<td class="noir"><input class="noir" type="number" alt="pawn"  id="case76" disabled="disabled"/></td>
<td class="blanc"><input class="blanc" type="number" alt="pawn"  id="case77" disabled="disabled"/></td>
</tr>
 
 
 
 
<input type="button" value="Here we Go !" id="start" onClick="initPlace()"/>
 
<input type="text" id="move" onkeypress="if (event.keyCode == 13) move()" />
 
 
</body>
 
</html>