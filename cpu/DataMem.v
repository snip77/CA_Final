
module DataMem(input rd,wr,input [11:0]a,input[15:0]wd , output reg [15:0]Rd);
reg [11:0]data[15:0];
always@(rd or wr)
begin
if(rd==1)
begin
Rd=data[a];
end
if(wr==1)
begin
data[a]=wd;
end
end
endmodule 