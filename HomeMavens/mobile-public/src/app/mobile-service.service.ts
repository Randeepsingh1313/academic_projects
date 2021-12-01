// import Mobile class, httpClient, httpResponse
import { Injectable } from '@angular/core';
import { Mobile } from './mobile'; 
import {HttpClient, HttpResponse} from "@angular/common/http";

@Injectable({
  providedIn: 'root'
})
export class MobileServiceService {

  private mobilesUrl = 'http://localhost:3000/api/mobiles';

  constructor(private http:HttpClient){}

  // GET method to get data from database via API
  mobilelist() : Promise<void | Mobile[]>{

    // Make a GET Request
     return this.http.get(this.mobilesUrl) 
     .toPromise() 
     .then(response => response as Mobile[])
      .catch(this.handleError); 
    }

    // handle error
    private handleError(error: any){ 
      console.log("error"); 
    }

    // GET method to get detail of single mobile
    mobileinfo(mobileid: string): Promise<void | Mobile>{ 

      return this.http.get(this.mobilesUrl + '/' + mobileid) 
      .toPromise() 
      .then(response => response as Mobile) 
      .catch(this.handleError); 
    }

    // POST method to create new Mobile
    createMobile(newMobile: Mobile): Promise<void | Mobile> { 

    return this.http.post(this.mobilesUrl, newMobile) 
    .toPromise() 
    .then(response => response as Mobile)
    .catch(this.handleError); 
  }
}
