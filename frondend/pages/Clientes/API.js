const urlClientes = "http://localhost/ArTeM01-047/clase2/backend/Controller.php?op=GetAll";

export const GetClientes =async()=>{
    try {
        const Clientes = await fetch(urlClientes);
        const DatosClientes = await Clientes.json();
        return DatosClientes
        
    } catch (error) {
        
    }
}