export class Mobile {

    // Home Features
    _id: string;
    property: string;
    address: string;
    type: string;
    size:  string;
    ownership: string;

    // Interior Features
    heating: string;
    basement: string;
    flooring:  string;
    garage:  string;
    inclusions: string;

    // Exterior Features
    foundation:  string;
    exterior:  string;
    fronting:  string;

    // Maintenance Fee
    water:  string;
    buildinginsurance: string;
    cabletv:  string;
    parkingmaintenance: string;

       
    // Amenities
    description: string;

    constructor (id: string, property: string, address: string, type: string, 
        size: string, ownership: string, heating: string, basement: string,
        flooring: string, garage: string, inclusions: string, foundation: string,
        exterior: string, fronting: string, water: string, buildinginsurance: string,
        cabletv: string, parkingmaintenance: string,description: string){
        this._id = id;
        this.property = property;
        this.address = address;
        this.type = type;
        this.size = size;
        this.ownership = ownership;
        this.heating = heating;
        this.basement = basement;
        this.flooring = flooring;
        this.garage = garage;
        this.inclusions = inclusions;
        this.foundation = foundation;
        this.exterior = exterior;
        this.fronting = fronting;
        this.water = water;
        this.buildinginsurance = buildinginsurance;
        this.cabletv = cabletv;
        this.parkingmaintenance = parkingmaintenance;
        this.description = description;
    }   
}
