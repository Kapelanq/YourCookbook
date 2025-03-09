import { Component } from '@angular/core';
import {FormBuilder, Validators} from '@angular/forms';
import { ReactiveFormsModule } from '@angular/forms';
import { HttpService } from '../../services/http/http.service';
import { PopupService } from '../../services/popup/popup.service';


@Component({
  selector: 'app-view-recipes',
  standalone: true,
  imports: [
    ReactiveFormsModule,
  ],
  templateUrl: './view-recipes.component.html',
  styleUrl: './view-recipes.component.scss'
})
export class ViewRecipesComponent {

  recipes: any;
  inputForm: any;

  constructor(
    private formBuilder: FormBuilder,
    private httpService: HttpService,
    private popupService: PopupService
  ) {}

  ngOnInit(): void {
    this.inputForm = this.formBuilder.group({
      name: ['', Validators.required],
    });
  }

  submitForm(): void{
      console.log('Form data: ', this.inputForm.value['name']);
      this.recipes = this.inputForm.value['name'];

      this.httpService.searchRecipe(this.recipes).subscribe(data => {
        console.log(data['meals']);
      });

      this.popupService.openPopup();

  }




}
