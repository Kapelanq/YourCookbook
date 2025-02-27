import { Component } from '@angular/core';
import {FormBuilder, Validators} from '@angular/forms';
import { ReactiveFormsModule } from '@angular/forms';
import { HttpService } from '../../services/http.service';

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

  inputForm: any;

  constructor(
    private formBuilder: FormBuilder,
    private httpService: HttpService,
  ) {}

  ngOnInit(): void {
    this.inputForm = this.formBuilder.group({
      name: ['', Validators.required],
    });
  }

  submitForm(): void{
     // console.log('Form data: ', this.inputForm.value['name']);
      const recipe = this.inputForm.value['name'];

      this.httpService.searchRecipe(recipe).subscribe(data => {
        console.log(data);
      });


  }




}
