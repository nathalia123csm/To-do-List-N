<!DOCTYPE html>
<html lang="en">
<head>
    <title>Eventos</title>
    <style>
        #cad
        {
            background: linear-gradient(90deg, rgba(131,58,180,1) 0%,
                                                rgba(253,29,29,1) 50%,
                                                rgba(252,176,69,1) 100%);
            margin-left: 400px;
            margin-right: 400px;
            padding:5px;
            border-radius:5px;
        }
        #titulo
        {
            color:rgb(0, 0, 0);
            text-align: center;
            font-weight: bold;
            margin-top: 50px;
            margin-left: 100px;
            margin-right: 100px;
            font-family:Arial, Helvetica, sans-serif;
        }
        #tarefas
        {
               text-align: center;  
               margin-left: 400px;
               margin-right: 400px;
               background: linear-gradient(90deg, rgba(131,58,180,1) 0%,
                                                rgba(253,29,29,1) 50%,
                                                rgba(252,176,69,1) 100%);
               border-radius:5px;

        }
        #topo
        {
            margin-top: 50px;
            margin-left: 400px;
            margin-right: 400px;
            background: linear-gradient(90deg, rgba(131,58,180,1) 0%,
                                                rgba(253,29,29,1) 50%,
                                                rgba(252,176,69,1) 100%);
            border-radius:5px;
        }
        .button{
            background-color: white;
            border-radius: 3px;  
            padding:5px;
            border:1px;
            width: 80px;
        }
        .butao{
            text-align: center;
        }
        .menu{
            cursor: pointer;
            font-size: 18px;
            text-align: center;
            width: 80%;
            font-family:Arial, Helvetica, sans-serif
            
        }
        .menu:hover{
            color:#FFF ;

        }
        .menu2{
            cursor: pointer;
            font-size: 18px;
            text-align: center;
            width: 130%;
            margin-top: -39px;
            font-family:Arial, Helvetica, sans-serif;
        }
        .menu2:hover{
            color:#FFF ;

        }
        .itens{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            padding: 5px;
        }
        
        .task{
            text-align: center;
        }
        .title{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }
        #descricao{
            text-align:center;
            border-radius: 3px;
            border: none;
            padding:5px;

        }
        #texto{
            text-align:center;
            border-radius: 3px;
            border: none;
            padding:5px;
        }
        #titulo{
            font-size:150%;
        }

    </style>
</head>
<body>
    <div id="topo">
        <p id="titulo">Lista de Tarefas</p>
        <p class="menu" onclick="cadastrar();">Cadastrar</p>
        <p class="menu2" onclick="exibir();">Exibir</p>
    </div>
    <div id="cad">
        <div class="task" >
           <p class="title"> Tarefa:</p> 
           <input id="texto" placeholder="Ex: Estudar para história">
        </div><br>
        
        <div class="butao"><button class="button" onclick="adicionar();">Salvar</button></div>
        </div>
    <div id="tarefas">      
    </div>
    <script>
        function adicionar()
        {
            
            var conteudo = document.getElementById('texto').value;
            if(conteudo!="")
            {
                var novoElemento = document.createTextNode(conteudo);
                var divNova = document.createElement('div');
                divNova.className="itens";
                var botao = document.createElement('button');
                var check = document.createElement('input');
                check.setAttribute("type", "checkbox");
                
                botao.innerHTML = "Remover";
                botao.className = "button";
                botao.style.color="purple";
                botao.addEventListener("click",
                function(){
                    divNova.remove();
                    alert("Tem certeza que deseja excluir esse ítem?")
                    divNova.remove();
                })
                divNova.appendChild(check);
                check.addEventListener('change',function(){
                    if(this.checked){
                        divNova.style.textDecoration = "line-through";
                    }else{
                        divNova.style.textDecoration = "none";
                    }
                })
                divNova.appendChild(novoElemento);
                divNova.appendChild(botao);
                document.getElementById('tarefas').appendChild(divNova);
                document.getElementById('texto').value = "";
                document.getElementById('cad').style.display="none";
                document.getElementById('tarefas').style.display="block";
            }
            
        }
        function cadastrar()
        {
            document.getElementById('cad').style.display="block";
            document.getElementById('tarefas').style.display="none";
                
        }
        function exibir()
        {
             document.getElementById('cad').style.display="none";
             document.getElementById('tarefas').style.display="block";
                
        }
    </script>  
</body>
</html>