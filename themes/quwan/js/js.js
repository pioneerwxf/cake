// JavaScript Document
function ECS_TREE_VIEW()
{
	 var list=document.getElementById('CateListView').getElementsByTagName('li');
	 var tempCur="";
	 for(i=0;i<list.length;i++)
	 {
		 list[i].onmouseover=function()
		 {
			 tempCur=this.getElementsByTagName("a")[0].className;
			  this.getElementsByTagName("a")[0].className=tempCur=="cur"?'cur':'cur1';
			 if(this.getElementsByTagName('div')[0])
			 {
			   this.getElementsByTagName('div')[0].style.display='block';
			   this.getElementsByTagName('iframe')[0].style.display='block';
			 } 
		 }
		 list[i].onmouseout=function()
		 {
			 this.getElementsByTagName("a")[0].className=tempCur;
			if(this.getElementsByTagName('div')[0])
			{
			   this.getElementsByTagName('div')[0].style.display='none';
			   this.getElementsByTagName('iframe')[0].style.display='none';
			}
		 }
	 }
 }

/*format to json*/
function obj2str(o)
{		
		    var r = [];
			if(typeof o =="string") return "\""+o.replace(/([\'\"\\])/g,"\\$1").replace(/(\n)/g,"\\n").replace(/(\r)/g,"\\r").replace(/(\t)/g,"\\t")+"\"";
			if(typeof o =="undefined") return "undefined";
			if(typeof o == "object"){				
				if(o===null) return "null";
				else if(!o.sort){
					for(var i in o)
					{		
						if(i!="toJSONString") //增加判断，清除对object原型的定义加入到json中
						r.push("\""+i+"\""+":"+obj2str(o[i]));
					}
					r="{"+r.join()+"}";
				}else{
					for(var i =0;i<o.length;i++)
						r.push(obj2str(o[i]))
					r="["+r.join()+"]"
				}
				return r;
			}
			return o.toString();
		//结束			
}

