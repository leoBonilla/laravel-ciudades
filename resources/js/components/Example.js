import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Lines } from 'react-preloaders';

export default class Example extends Component {

    constructor(){
        super();
        this.state = {
        regiones: [],
        provincias:[],
        comunas: [],
        calles:[]

       }
    }
    componentDidMount() {
    fetch('/api/regiones')
        .then(response => {
            this.setState({loading: true});
            return response.json();
        })
        .then(regiones => {
            this.setState({ regiones : regiones});
        });
    }

    ChangeRegions = (e) => {  
                console.log(e.target.key);
                fetch('api/region/'+e.target.value ).then(response =>{
                    this.setState({provincias:[], comunas :[], calles : []})
                    return response.json();
                }).then(provincias => {   
                        this.setState({  
                                provincias: provincias
                        });  
                });  
        }

    ChangeProvincias = (e) => {  
                console.log(e.target.key);
                fetch('api/provincia/'+e.target.value ).then(response =>{
                    this.setState({comunas :[], calles : []})
                    return response.json();
                }).then(comunas => {  
                        this.setState({  
                                comunas: comunas
                        });  
                });  
        }  

    changeComunas = (e) => {  
                console.log(e.target.key);
                fetch('api/calles/'+e.target.value ).then(response =>{
                    return response.json();
                }).then(calles => {   
                        this.setState({  
                                calles: calles,  
                        });  
                });  
        }  


    renderRegions() {
    return this.state.regiones.map(region => {
        return (
            <option key={ region.id_region } value={ region.id_region} >
                { region.region } 
            </option> 
        );
    })
  }

  renderProvincias() {
    return this.state.provincias.map(provincia => {
        return (
            <option key={ provincia.id_provincia } value={ provincia.id_provincia} >
                { provincia.provincia } 
            </option> 
        );
    })
  }

  renderComunas() {
    return this.state.comunas.map(comuna => {
        return (
            <option key={ comuna.id_comuna } value={ comuna.id_comuna} >
                { comuna.comuna } 
            </option> 
        );
    })
  }

  renderCalles() {
    return this.state.calles.map(calle => {
        return (
          <tr>
         <td>{calle.calle}</td>
         <td>{calle.numero}</td>
         <td>{calle.depto}</td>
         <td>{calle.referencia}</td>
         <td>{calle.codigo_postal}</td>
         </tr>
        );
    })
  }
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-4">
                        <div className="card">
                            <div className="card-header">Seleccione Region</div>

                            <div className="card-body">
                            <select className="form-control" onChange={this.ChangeRegions}>
                            <option>---</option>
                { this.renderRegions() }
              </select> 
                            </div>
                        </div>
                    </div>

                      <div className="col-md-4">
                        <div className="card">
                            <div className="card-header">Seleccione Provincia</div>
                              <div className="card-body">
                                  <select className="form-control" onChange={this.ChangeProvincias}>
                                     <option>---</option>
                                        { this.renderProvincias() }
                                    </select> 
                              </div>
                           </div>
                        </div>


                    <div className="col-md-4">
                        <div className="card">
                            <div className="card-header" >Seleccione Provincia</div>
                              <div className="card-body">
                                  <select className="form-control" onChange={this.changeComunas}>
                                     <option>---</option>
                                        { this.renderComunas() }
                                    </select> 
                              </div>
                           </div>
                        </div>                   
                    </div>
                    <div className="row justify-content-center" id="calle">
                     <div className="col-md-8">
                        <div className="card">
                        <div className="card-header">Registro de direcciones</div>
                        <div className="card-body">
                        <table className="table">
                            <thead>
                                <tr>
                                    <th>Calle</th>
                                    <th>Numero</th>
                                    <th>Dpto </th>
                                    <th>Referencia</th>
                                    <th>Codigo Postal</th>

                                </tr>
                            </thead>
                            <tbody>
                                  {this.renderCalles()}
                            </tbody>
                           </table>
                        </div>
                        </div> 
                     </div>
                </div>
            </div>
        );
    }


}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
