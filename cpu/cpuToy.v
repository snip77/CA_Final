module cpuToy (input clk ,output reg[15:0]pc_out,output reg [15:0]alu_result );

wire [11:0] pc_out,pc_in,adder_out,mux_out_data_mem;
wire src_adr,src_data,rd_dmem,wr_dmem,src_a,wr_a,wr_t;
wire [2:0]alu_op;
wire [1:0]src_pc;
wire [15:0] inst_mem_out,mux_out_write_data,data_mem_out,
reg_a_in,alu_out,reg_a_out,reg_t_out;
always @(posedge clk)
begin

Adder32bit (pc_out,adder_out);
 InMem (pc_out,inst_mem_out);
 Control (inst_mem_out[15:12],src_pc,alu_op ,wr_t,wr_a ,src_a ,wr_dmem,rd_dmem 
 ,src_adr ,src_data);
 Mux2to1_12bit (inst_mem_out,reg_a_out , src_adr ,mux_out_data_mem);
Mux2to1_16bit (reg_a_out,reg_t_out ,src_data, mux_out_write_data);
 DataMem(rd_dmem,wr_dmem,mux_out_data_mem,mux_out_write_data,data_mem_out);
Mux2to1_16bit (alu_out,data_mem_out,src_a, reg_a_in);
 RegA (clk,wr_a ,reg_a_in, reg_a_out);
 RegT (clk ,wr_t,reg_a_out, reg_t_out);
Alu (alu_op,reg_a_out,data_mem_out, alu_out);
Mux3to1 (adder_out,inst_mem_out,data_mem_out ,src_pc ,pc_in);
 Pc (clk ,pc_in,pc_out);

end

endmodule









