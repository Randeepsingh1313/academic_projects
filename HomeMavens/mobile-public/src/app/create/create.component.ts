// import Component, class, service
import { Component, OnInit } from '@angular/core';
import { MobileServiceService } from '../mobile-service.service';
import { Mobile } from '../mobile';

@Component({
  selector: 'app-create',
  templateUrl: './create.component.html',
  styleUrls: ['./create.component.css'],
  providers: [MobileServiceService]
})
export class CreateComponent implements OnInit {

  public newMobile: Mobile = { _id: '', property: '', address: '', type: '', size: '',
                              ownership: '', heating: '', basement: '', flooring: '', garage: '', 
                              inclusions: '', foundation: '', exterior: '', fronting: '',
                              water: '', buildinginsurance: '', cabletv: '', parkingmaintenance: '',
                              description: '' };

  constructor(private mobileService: MobileServiceService) { }

  ngOnInit(): void { }

  public createNewMobile(newMobile: Mobile): void{ 
    this.mobileService.createMobile(newMobile); }

}
