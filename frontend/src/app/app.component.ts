import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { ViewRecipesComponent } from "./components/view-recipes/view-recipes.component";
import { NavBarComponent } from "./components/nav-bar/nav-bar.component";

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [RouterOutlet, ViewRecipesComponent, NavBarComponent],
  templateUrl: './app.component.html',
  styleUrl: './app.component.scss'
})
export class AppComponent {
  title = 'YourCookbook';

  
}
