// import Class, Service, Component
import { Component, OnInit } from '@angular/core';
import { Mobile } from '../mobile'; 
import { MobileServiceService } from "../mobile-service.service";

@Component({
  selector: 'app-mobile-list',
  templateUrl: './mobile-list.component.html',
  styleUrls: ['./mobile-list.component.css'],
  providers: [ MobileServiceService ]
})
export class MobileListComponent implements OnInit {

  mobiles: any

  constructor( private mobileService: MobileServiceService) { }

  ngOnInit(): void {

      this.mobileService
      .mobilelist()
      .then((mobiles: any) =>{
        this. mobiles = mobiles.map((mobile: any) => {
          return mobile;
        })
      })
  }
}

