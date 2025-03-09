import { Injectable } from '@angular/core';
import { MatDialog, MatDialogClose, MatDialogConfig } from '@angular/material/dialog';
import { PopupComponent } from '../../components/popup/popup.component';

@Injectable({
  providedIn: 'root'
})
export class PopupService {
  constructor(private dialog: MatDialog) { }

  openPopup(){
    const dialogConfig = new MatDialogConfig();

    dialogConfig.autoFocus = true;
    dialogConfig.position = {
      'left': '5%',
      'bottom' : '5%'
    }
    dialogConfig.maxWidth = '100vw';
    dialogConfig.maxHeight = '100vh';

    dialogConfig.height = '80%'
    dialogConfig.width = '90%'
    dialogConfig.panelClass = 'full-screen-modal'

    this.dialog.open(PopupComponent, dialogConfig);
  }
}
