// import ng, browser, httpClient, router, forms Modules and app_base_href
import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http';
import { APP_BASE_HREF} from '@angular/common'; 
import { RouterModule} from '@angular/router';
import { FormsModule } from '@angular/forms';

// import Components
import { MobileListComponent } from './mobile-list/mobile-list.component';
import { AboutComponent } from './about/about.component';
import { HomepageComponent } from './homepage/homepage.component';
import { HeaderComponent } from './header/header.component';
import { FrameworkComponent } from './framework/framework.component';
import { CreateComponent } from './create/create.component';
import { DetailsPageComponent } from './details-page/details-page.component';

@NgModule({
  declarations: [
    MobileListComponent,
    AboutComponent,
    HomepageComponent,
    HeaderComponent,
    FrameworkComponent,
    CreateComponent,
    DetailsPageComponent
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    FormsModule,
    RouterModule.forRoot([ 
    {
       path: '', 
      component: HomepageComponent 
    }, 
    { 
      path: 'about',
     component: AboutComponent 
    }, 
    { 
      path: 'create', 
    component: CreateComponent 
    }, 
    { 
      path: 'mobiles/:mobileid', 
      component: DetailsPageComponent }
  ])
  ],
  providers: [{provide: APP_BASE_HREF, useValue: '/'}],
  bootstrap: [FrameworkComponent]
})
export class AppModule { }
