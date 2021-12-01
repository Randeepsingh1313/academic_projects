import { Component, OnInit } from '@angular/core';
import { Mobile } from '../mobile'; 
import { MobileServiceService } from '../mobile-service.service'; 
import { switchMap } from 'rxjs/operators'; 
import { ActivatedRoute, Params } from '@angular/router';

@Component({
  selector: 'app-details-page',
  templateUrl: './details-page.component.html',
  styleUrls: ['./details-page.component.css'],
  providers: [ MobileServiceService ]
})
export class DetailsPageComponent implements OnInit {

  constructor(private mobileService: MobileServiceService, private route: ActivatedRoute) { }

  newMobile: any;
  pageContent = { 
    header: { 
      title: '', body: '' 
    } 
  };

  ngOnInit(): void {

    this.route.params.pipe(switchMap((params: Params) => {
      return this.mobileService.mobileinfo(params.mobileid);
  }))
  .subscribe((placeData: any) => {
    console.log('Selected Mobile', placeData);
    this.newMobile = placeData;
    this.pageContent.header.title = this.newMobile.name;
    this.pageContent.header.body = 'Details for selected Mobile.';
  });
  }
}
