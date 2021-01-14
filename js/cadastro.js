// verificar se as senhas são iguais
document.querySelector('#botao').addEventListener('click',()=>{
    let senha=document.getElementById('senha').value;
    let confirmasenha=document.getElementById('confirmasenha').value;

    if(senha=confirmasenha){
        swal({
            title: "Cadastro Realizado com sucesso",
            text: "Obrigado por se cadastrar!",
            icon: "success",
            timer:7000
          });
            document.getElementById('senha').style.borderColor='green';
            document.getElementById('confirmasenha').style.borderColor='green';

        }

        else
        {
            swal ( " ERRO NA CONFIRMAÇÃO DE SENHA " , { 
            className : " red-bg " , 
          } ) ;
            document.getElementById('senha').style.borderColor='red';
            document.getElementById('confirmasenha').style.borderColor='red';
        }
    });
