const urlClientes = "http://localhost/SkylAb-118/clase2/backend/Controller.php?op=GetAll";

export const GetClientes =async()=>{
    try {
        const Clientes = await fetch(urlClientes);
        const DatosClientes = await Clientes.json();
        return DatosClientes
        
    } catch (error) {
        console.log(error);
    }
}
export function PostCliente(array){
    try {
        fetch("http://localhost/SkylAb-118/clase2/backend/Controller.php?op=Insert",{
            method:"POST",
            body:JSON.stringify(array),
            headers:{
                "Content-Type":"application/json"
            }
        });
    } catch (error) {
        console.log(error);
    }

}