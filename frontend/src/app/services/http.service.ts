import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Recipe } from '../DataModels/Recipe';

@Injectable({
  providedIn: 'root'
})
export class HttpService {

  constructor(private http: HttpClient) { }
  //url do połączenia z backendem
  url = 'http://127.0.0.1:8000/searchRecipe';


  getData(): Observable<Recipe>
  {
     return this.http.get<Recipe>(this.url);
  }

  searchRecipe(name: string): Observable<any>
  {
    const headers = {'content-type': 'application/json'};
    console.log(name);
    return this.http.post<any>(this.url, name, {'headers': headers});
  }

  addRecipe(code: string): Observable<any>
  {
    const headers = {'content-type': 'application/json'};
    console.log(code);
    return this.http.post(this.url, code, {'headers': headers});
  }

  
}
