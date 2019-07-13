<?php shell_exec('python index.py') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Simulator - Run</title>
	<link rel="stylesheet" type="text/css" href="style/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style/Run.css">
</head>
<body>
	<div id="app">
		<div class="h_row">
			<div class="regs_box">
				<div style="display: flex;">
				<label style="margin-left: 5%;">A:</label>
				<data class="reg_a">{{reg_a}}</data>
				<select name="compile_type" class="form-control show_type" v-on:change="reg_a_show_type_change($event)" v-model="reg_a_show_idex">
			      	<option>Binary</option>
			      	<option>Integer</option>
			      	<option>Charcter</option>
		    	</select>
				</div>
				<br>
				<div style="display: flex;">
					<data style="margin-left: 5%">T:</data>
					<data class="reg_t">{{reg_t}}</data>
					<select name="compile_type" class="form-control show_type" v-on:change="reg_t_show_type_change($event)" v-model="reg_t_show_idex">
				      	<option>Binary</option>
				      	<option>Integer</option>
				      	<option>Charcter</option>
			    	</select>
		    	</div>
			</div>
			<div class="instruction_mem_box">
				<data style="margin-left: 5%;">Instruction memory index:</data>
				<input class="form-control ins_mem_inp" id="memoy_index_inp" placeholder="index" v-model="ins_mem_index">
				<br>
				<data class="inst_mem">{{ins_mem[ins_mem_index]}}</data>
			</div>
			<div class="instruction_mem_box">
				<data style="margin-left: 5%;">Data memory index:</data>
				<input class="form-control ins_mem_inp" id="memoy_index_inp" placeholder="index" v-model="data_mem_index">
				<br>
				<div style="display: flex;">
					<data class="data_mem">{{data_mem[data_mem_index]}}</data>
					<select name="compile_type" class="form-control show_type" v-on:change="data_mem_show_type_change($event)" v-model="data_mem_show_idex">
					    <option>Binary</option>
					    <option>Integer</option>
					    <option>Charcter</option>
				    </select>
			    </div>
			</div>
			<div class="stage_box">
				<data style="margin-left: 5%;">Code is in line:</data>
				<data class="stage">{{stage}}</data>
			</div>
		</div>
		<div class="h_row">
			<div class="pc_box">
				<data style="margin-left: 5%;">Program Counter :</data>
				<data class="pc">{{pc}}</data>
			</div>
		</div>
		<button v-on:click="run" type="button" class="btn btn-dark run">Run</button>
	</div>
	<script type="text/javascript" src="script/vue.js"></script>
	<script type="text/javascript" src="script/Run.js"></script>
</body>
</html>